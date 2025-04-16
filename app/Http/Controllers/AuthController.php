<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registration()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $name = $request->validated('name');
        $email = $request->validated('email');
        $password = $request->validated('password');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function auth_attempt(LoginRequest $request)
    {

        if (Auth::attempt($request->validated())) {

            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()->with([
            'error' => 'The provided credentials do not match our records.'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerate();

        return redirect()->route('login');
    }
}
