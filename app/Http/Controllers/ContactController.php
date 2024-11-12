<?php

namespace App\Http\Controllers;

use App\Mail\ContactMial;
use App\Mail\ForgotPasswordMail;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

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

    public function postComplain(Request $request)
    {
        $request->validate([
            'user_email' => 'required',
        ]);

        $admin_data = User::where('id', 1)->first();

        $subject = 'Contact Form Message';
        $body = '<h2>Visitor Information</h2>';
        $body .= '<p><strong>Name:</strong> ' . $request->user_name . '</p>';
        $body .= '<p><strong>Email:</strong> ' . $request->user_email . '</p>';
        $body .= '<p><strong>Subject:</strong> ' . $request->user_subject . '</p>';
        $body .= '<p><strong>Message:</strong> ' . nl2br(e($request->user_message)) . '</p>';

        Mail::to($admin_data->email)->send(new ContactMial($subject, $body));

        return redirect()->back()->with('success', 'Message is sent successfully! We will contact you soon.');

        // $user = User::where('email', $request->email)->first();

        // // Generate a new token and save it
        // if ($user) {
        //     // $user->remember_token = Str::random(50);
        //     // $user->save();

        //     Mail::to($user->email)->send(new ForgotPasswordMail($user));

        //     return redirect()->route('show.contact')->with(
        //         'success',
        //         'Query has been Sent'
        //     );
        // } else {
        //     return redirect()->route('view.contact')->withErrors([
        //         'email' => 'The provided credentials does not found',
        //     ]);;
        //}
    }
}
