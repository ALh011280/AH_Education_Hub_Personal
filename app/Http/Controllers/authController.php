<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller

{
    public function signup(Request $signup_req)
    {
        $signup_data = $signup_req->validate([
            'user_id' => [
                'required',
                'regex:/^(Te@c\#er|\$tuden\+).+$/',
                'unique:users,user_id',
            ],
            'name' => 'required|regex:/^[A-Za-z\s]+$/',
            'phone' => 'required|digits:11',
            'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&]).+$/',
            'role' => 'required',
        ]);

        $user = User::create($signup_data);
        if ($user) {
            return redirect()->route('login')->with('success_message', 'Account Successfully Created!');
        } else {
            return back()->route('register');
        }
    }

    public function login(Request $login_req)
    {
        $login_data = $login_req->validate([
            'user_id' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($login_data)) {
            return redirect()->route('dashboard');
        }

        return back()->with(
            'error_message',
            'Invalid User ID or Password!'
        );
    }
}
