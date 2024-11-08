<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function getAbout()
    {
        return view('admin.about');
    }

    public function postAbout(Request $request)
    {

        $request->validate([
            'main_heading' => 'required|string|max:255',
            'first_heading' => 'required|string|max:255' . $request->id,
            'first_description' => 'required',
            'second_heading' => 'required',
            'second_description' => 'required',
            'third_heading' => 'required',
            'third_description' => 'required',
            'title' => 'required'
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

        if ($request->has('image')) {
            // if ($user->image && file_exists(public_path($user->image))) {
            //     unlink(public_path($user->image));

            if (File::exists($user->image)) {
                (File::delete($user->image));
            }
            $file = $request->file('image');

            $filename = time() . '.' . $file->extension();

            $path = 'uploads/category/';
            $filePath = $file->storeAs($path, $filename, 'public');
            $user->image = 'storage/' . $filePath;
        }
        $user->save();

        return redirect()->route('view.profile')->with('success', 'Profile updated successfully.');
    }
}
