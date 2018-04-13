<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;

class ThreadController extends Controller
{
    // public function __construct()
    // {

    // }

    public function index()
    {
        $threads = Thread::latest()->get();

        return view('home', compact('threads'));
    }

    public function create()
    {
        return view('threads.create');
    }

    // public function store()
    // {
    //     auth()->user()->createThread([
    //         'title' => request()->title,
    //         'body' => request()->body,
    //     ]);
    // }
}
