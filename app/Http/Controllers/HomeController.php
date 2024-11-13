<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function showHome()
    {
        $show = Home::all();
        return view('frontend.home_show', compact('show'));
    }

    public function getHome()
    {
        $home = Home::first();
        return view('admin.home', compact('home'));
    }

    public function postHome(Request $request)
    {

        $request->validate([
            'main_heading' => 'required',
            'main_description' => 'required',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'last_heading' => 'required',
            'last_description' => 'required',
            'last_button' => 'required|string|max:255',
        ]);


        $home = Home::findOrFail($request->id);

        $home->main_heading = $request->main_heading;
        $home->main_description = $request->main_description;

        $home->last_heading = $request->last_heading;
        $home->last_description = $request->last_description;
        $home->last_button = $request->last_button;

        if ($request->has('main_image')) {

            if (File::exists($home->main_image)) {
                (File::delete($home->main_image));
            }
            $file = $request->file('main_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/home/';
            $file->move(public_path($path), $filename);
            $home->main_image = $path . $filename;
        }

        $home->save();

        return redirect()->route('view.home')->with('success', 'Home Page updated successfully.');
    }
}
