<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
    public function showContact()
    {
        $show = Contact::all();
        return view('frontend.contact_show', compact('show'));
    }
    public function getContact()
    {
        $contact = Contact::first();
        return view('admin.contact', compact('contact'));
    }

    public function postContact(Request $request)
    {

        $request->validate([
            'main_heading' => 'required|string|max:255', //. $request->id,
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'contact_heading' => 'required|string|max:255',
            'contact_description' => 'required',
        ]);


        $contact = Contact::findOrFail($request->id);

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

        return redirect()->route('view.contact')->with('success', 'About Page updated successfully.');
    }
}
