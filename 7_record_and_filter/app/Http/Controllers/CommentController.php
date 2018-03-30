<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentController extends Controller
{
    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }
}
