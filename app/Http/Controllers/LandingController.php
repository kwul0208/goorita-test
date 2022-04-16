<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LandingController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->with('user')->paginate(2);
        return view('landing.home', [
            'title' => 'Goorita',
            'posts' => $posts
        ]);

    }

    public function read($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('landing.read',[
            'title' => $post->title,
            'post' => $post 
        ]);
    }
}
