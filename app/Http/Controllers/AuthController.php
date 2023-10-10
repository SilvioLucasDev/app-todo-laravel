<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect(route('home.index'));
        }

        return view('auth.login');
    }

    public function login_action(Request $request)
    {
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($validator)) {
            return redirect(route('home.index'));
        }

        return redirect(route('auth.login'));
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect(route('home.index'));
        }

        return view('auth.register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        $user = $request->only('name', 'email', 'password');
        User::create($user);

        return redirect(route('home.index'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('auth.login'));
    }
}
