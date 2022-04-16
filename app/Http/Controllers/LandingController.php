<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LandingController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);
        return view('landing.home', [
            'title' => 'Goorita',
            'posts' => $posts
        ]);

    }
}
