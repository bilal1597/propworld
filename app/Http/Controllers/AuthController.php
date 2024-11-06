<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function getForget()
    {
        return view('admin.forget-password');
    }

    public function postForget(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        // Generate a new token and save it
        if ($user) {
            $user->remember_token = Str::random(50);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->route('view.forget')->with(
                'success',
                'Email has been sent to your Account'
            );
        } else {
            return redirect()->route('view.forget')->withErrors([
                'email' => 'The provided credentials does not found',
            ]);;
        }
    }
    public function getReset()
    {
        return view('admin.reset');
    }
}
