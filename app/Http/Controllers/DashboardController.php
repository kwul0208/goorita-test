<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'dashboard';
        $datas = Post::all();
        return view('dashboard.index', [
            'title' => $title,
            'datas' => $datas
        ]);
    }

    public function postView()
    {
        $title = 'Add New Post';
        return view('dashboard.postView', [
            'title' => $title,
        ]);
    }

    public function postStore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|file|max:1024',
            'body' => 'required'
        ]);

        
        $slug = implode("-", explode(" ", $request->title)). "-" .time();
        $path = Storage::disk('local')->put('public/image', $request->file('image'));
        $image = explode('/', $path);

        Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'sort_description' => Str::limit(strip_tags($request->body), 100, '...'),
            'description' => $request->body,
            'image' =>  $image[1]."/".$image[2]
        ]);

        return redirect('/dashboard')->with('success', 'new post has been created!');
    }

    // delete
    public function delete($id)
    {
        $post = Post::find($id);
        Storage::delete('public/'.$post->image);
        $post->delete();

        return redirect()->back()->with('success', 'post has been deleted!');
    }
    // end

    // edit
    public function editView($id)
    {
        return view('dashboard.editView', [
            'title' => 'edit post',
            'data' => Post::find($id)
        ]);
    }

    public function editPost(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete('public/'.$request->oldImage);
            }
            $path = Storage::disk('local')->put('public/image', $request->file('image'));
            $image = explode('/', $path);

            Post::where('id', $id)->update([
                'title' => $request->title,
                'image' => $image[1]."/".$image[2],
                'sort_description' => Str::limit(strip_tags($request->body), 100, '...'),
                'description' => $request->body
            ]);
        }else{
            Post::where('id', $id)->update([
                'title' => $request->title,
                'sort_description' => Str::limit(strip_tags($request->body), 100, '...'),
                'description' => $request->body
            ]);
        }
        return redirect('/dashboard')->with('success', 'new post has been updated!');
    }
}
