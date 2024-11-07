<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPassword;
use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
    public function getReset($token)
    {
        if (Auth::check()) {
            return redirect()->route('view.dashboard');
        }

        $user = User::where('remember_token', $token)->first();

        if (!$user) {

            return abort(403, 'Unauthorized action. Token may be invalid or expired.');
        }
        $data['token'] = $token;

        return view('admin.reset-password', $data);
    }


    public function postReset($token, ResetPassword $request)
    {
        $user = User::where('remember_token', $token);

        if (!$user) {
            abort(403);
        }

        $user = $user->first();
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->save();
        return redirect()->route('view.login')->with('success', 'Password has been Reset');
    }
}
