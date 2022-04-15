<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LandingController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('landing.home', [
            'title' => 'Goorita',
            'posts' => $posts
        ]);

    }
}
