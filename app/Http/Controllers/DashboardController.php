<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
}
