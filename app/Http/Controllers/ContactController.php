<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // ✅ Validate input
        $validated = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'message' => 'required|max:1000',
        ]);

        // ✅ Send the email
        Mail::to(env('CONTACT_EMAIL'))->send(
            new ContactMessage(
                $validated['name'],
                $validated['email'],
                $validated['message']
            )
        );

        // ✅ Redirect back with success message
        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
