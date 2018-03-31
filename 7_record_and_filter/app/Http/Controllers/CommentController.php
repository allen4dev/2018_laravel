<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['edit']]);
        $this->middleware('auth');
    }

    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    public function update(Comment $comment)
    {
        $this->validate(request(), [
            'body' => 'required'
        ]);

        $comment->body = request()->body;

        $comment->save();

        return redirect("/posts/{$comment->post->id}");
    }
}
