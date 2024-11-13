<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function showHome()
    {
        return view('frontend.home_show');
    }

    public function getHome()
    {
        $home = Home::first();
        return view('admin.home', compact('home'));
    }

    public function postHome(Request $request)
    {

        $request->validate([
            'main_heading' => 'required|string|max:255',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'contact_heading' => 'required|string|max:255',
            'contact_description' => 'required',
        ]);


        $contact = Home::findOrFail($request->id);

        $contact->main_heading = $request->main_heading;
        $contact->contact_heading = $request->contact_heading;
        $contact->contact_description = $request->contact_description;
        if ($request->has('main_image')) {

            if (File::exists($contact->main_image)) {
                (File::delete($contact->main_image));
            }
            $file = $request->file('main_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/contact/';
            $file->move(public_path($path), $filename);
            $contact->main_image = $path . $filename;
        }

        $contact->save();

        return redirect()->route('view.contact')->with('success', 'Contact Page updated successfully.');
    }
}
