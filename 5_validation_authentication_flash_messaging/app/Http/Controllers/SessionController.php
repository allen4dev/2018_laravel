<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['destroy']]);
    }

    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        if (!auth()->attempt(['email' => request()->email, 'password' => request()->password ])) {
            return redirect()->login();
        }

        session()->flash('message', 'Welcome back');

        return redirect()->intended('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('login');
    }
}
