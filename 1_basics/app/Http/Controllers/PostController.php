<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();

        return view('home', compact('posts'));
    }

    public function show(Post $post) {
        return view('detail', compact('post'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:5|max:250'
        ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 2,
            'category_id' => 5
        ]);

        return redirect('/');
    }
}
