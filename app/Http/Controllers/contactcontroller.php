<?php

namespace App\Http\Controllers;
use Illuminate\Support\HtmlString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class contactcontroller extends Controller
{
    public function send(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
    
        // Send an email with a plain string body
        Mail::raw(
            'Name: ' . $request->name . "\n" .
            'Email: ' . $request->email . "\n" .
            'Message: ' . $request->message,
            function ($message) use ($request) {
                $message->to('your-email@example.com') // Replace with your email
                        ->subject('New Contact Message');
            }
        );
    
        // Redirect or return success message
        return redirect()->back()->with('success', 'Your message has been sent!');

    }
}
