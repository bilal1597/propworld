<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{

    public function getAbout()
    {
        $about = About::first();
        return view('admin.about', compact('about'));
    }

    public function postAbout(Request $request)
    {

        $request->validate([
            'main_heading' => 'required|string|max:255' . $request->id,
            'first_heading' => 'required|string|max:255',
            'first_description' => 'required',
            'second_heading' => 'required',
            'second_description' => 'required',
            'third_heading' => 'required',
            'third_description' => 'required',
            'title' => 'required',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'existing_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'ceo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'ceo2_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);


        $about = About::findOrFail($request->id);


        $about->main_heading = $request->main_heading;
        $about->first_heading = $request->first_heading;
        $about->first_description = $request->first_description;
        $about->second_heading = $request->second_heading;
        $about->second_description = $request->second_description;
        $about->third_heading = $request->third_heading;
        $about->third_description = $request->third_description;
        $about->title = $request->title;

        if ($request->has('main_image')) {

            if (File::exists($about->main_image)) {
                (File::delete($about->main_image));
            }
            $file = $request->file('main_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/about/';
            $file->move(public_path($path), $filename);
            $about->main_image = $path . $filename;
        }

        if ($request->has('existing_image')) {

            if (File::exists($about->existing_image)) {
                (File::delete($about->existing_image));
            }
            $file = $request->file('existing_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/about/';
            $file->move(public_path($path), $filename);
            $about->existing_image = $path . $filename;
        }

        if ($request->has('ceo_image')) {

            if (File::exists($about->ceo_image)) {
                (File::delete($about->ceo_image));
            }
            $file = $request->file('ceo_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/about/';
            $file->move(public_path($path), $filename);
            $about->ceo_image = $path . $filename;
        }
        if ($request->has('ceo2_image')) {

            if (File::exists($about->ceo2_image)) {
                (File::delete($about->ceo2_image));
            }
            $file = $request->file('ceo2_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/about/';
            $file->move(public_path($path), $filename);
            $about->ceo2_image = $path . $filename;
        }



        $about->save();

        return redirect()->route('view.dashboard')->with('success', 'About Page updated successfully.');
    }
}
