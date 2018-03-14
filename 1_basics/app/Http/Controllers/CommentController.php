<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $post->addComment($request);
        return back();

    }
}
