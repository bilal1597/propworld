<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function getProfile()
    {
        // Fetch the authenticated user
        $user = Auth::user(); // Get the currently authenticated user

        // Return the profile view with user data
        return view('admin.profile', compact('user'));

        // if (Auth::check()) {
        //     $profile = User::all();
        //     $user = User::find($id);
        //     if (!$user) {
        //         return redirect()->back()->with('error', 'Product not found.');
        //     }
        //     return view('admin.profile', compact('user'));
        // } else {
        //     return redirect()->route('view.login');
        // }
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user(); // Get the currently authenticated user

        // Validate input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'new_password' => 'requiredd|string|min:8|confirmed', // optional password
            // 'retype_password' => 'required|same:new_password',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp' // optional photo upload
        ]);

        // // Update user data
        // $user->name = $validated['name'];
        // $user->email = $validated['email'];

        // if ($request->has('new_password') && $request->new_password) {
        //     $user->password = bcrypt($request->new_password);
        // }

        // // Handle photo upload if a new photo is uploaded
        // if ($request->hasFile('photo')) {
        //     $path = $request->file('photo')->store('user_photos', 'public');
        //     $user->photo = $path;
        // }

        // $user->save(); // Save the changes to the database

        return redirect()->route('view.profile')->with('success', 'Profile updated successfully.');
    }
}
