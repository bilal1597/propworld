<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (Auth::check()) {
            return view('admin.index', compact('user'));
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

        $user = Auth::user();                   // Get the currently authenticated user

        if (Auth::check()) {
            return view('admin.profile', compact('user'));
        } else {
            return redirect()->route('view.login');
        }

        // return view('admin.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $request->id,
            'password' => 'nullable|string|min:4', // optional password
            'retype_password' => 'nullable|same:password',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp' // optional photo upload
        ]);


        $user = User::findOrFail($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($request->has('image')) {
            // if ($user->image && file_exists(public_path($user->image))) {
            //     unlink(public_path($user->image));

            if (File::exists($user->image)) {
                (File::delete($user->image));
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/about';
            $file->move(public_path($path), $filename);
            $user->image = $path . $filename;
        }
        $user->save();

        return redirect()->route('view.profile')->with('success', 'Profile updated successfully.');
    }
}
