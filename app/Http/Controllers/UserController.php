<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('admin.index');
        } else {
            return redirect()->route('view.login');
        }
    }

    public function getLogin()
    {
        if (Auth::check()) {
            return redirect()->route('view.dashboard');
        } else {
            return view('admin.login');
        }
    }

    public function postLogin(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt($user)) {

            return redirect()->route('view.dashboard');
        } else {
            return redirect()->route('view.login')
                ->withErrors([
                    'email' => 'Email or Password is Wrong',
                ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('view.login');
    }
}
