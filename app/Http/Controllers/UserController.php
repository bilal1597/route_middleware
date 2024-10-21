<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function getRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4',
            'password_confirm' => 'same:password'
        ]);

        $user = User::create($data);
        if ($user) {
            return redirect()->route('login');
        }
    }

    public function getLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
    }

    public function dashboardPage()
    {

        return view('dashboard');
    }







    ////////////////////////////////   Authentication

    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}
