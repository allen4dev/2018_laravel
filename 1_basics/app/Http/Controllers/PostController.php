<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('home', compact('posts'));
    }

    public function show(Post $post)
    {
        $comments = $post->comments()->get();
        return view('detail', compact('post', 'comments'));
    }
}
