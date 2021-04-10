<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        # code...
    }

    public function posts()
    {
        // Un post carga UN user,, NO usersss
        // 'posts' => Post::load('user')->latest()->paginate()
        return view('posts',[
            'posts' => Post::with('user')->latest()->paginate(2)
        ]);
    }

    public function post(Post $post)
    {
        return view('post',[
            'post' => $post
        ]);
    }
}
