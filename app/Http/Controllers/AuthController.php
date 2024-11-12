<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // views

    public function showRegistForm(Request $request){
        return view('universal.register');
    }

    public function showLoginForm(Request $request){
        return view('universal.login');
    }

    // logic

    public function register(Request $request){
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'bio' => 'Hello, I am a new user',
            'role_id' => 1,
        ]);

        return redirect()->route('login');
    }

    public function login(Request $request){
        $credentials = $request->only('username', 'password');

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'username' => 'Credentials are incorrect',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }
}
