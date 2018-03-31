<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Filters\PostFilters;
use App\Post;

class PostController extends Controller
{
    public function index(PostFilters $filters)
    {
        return Post::filter($filters)->get();
    }

    public function show(Post $post)
    {
        return view('posts.detail', compact('post'));
    }
}
