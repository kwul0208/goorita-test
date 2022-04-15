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
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        
        $slug = implode("-", explode(" ", $request->title)). "-" .time();

        Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'sort_description' => Str::limit(strip_tags($request->body), 150, '...'),
            'description' => $request->body,
            'image' => Storage::disk('local')->put('image',  $request->file('image'))
        ]);

        return redirect('/dashboard')->with('success', 'new post has been created!');
    }
}
