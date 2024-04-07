<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class CustomAuthController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function submitContactForm(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            // 'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Send an email
        Mail::to('wisgeorge.wg@gmail.com') // Replace with the recipient's email address
            ->send(new ContactFormMail($request));

        // Optionally, you can flash a success message or handle the response as needed
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
