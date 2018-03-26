<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCreateAccount;

use App\User;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('register.create');
    }

    public function store(StoreCreateAccount $request)
    {
        // create the user
        $user = User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => bcrypt(request()->password),
        ]);

        // sign in the user
        auth()->login($user);

        // redirect to home
        return redirect('/');
    }
}
