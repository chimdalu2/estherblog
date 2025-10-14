<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Show the contact page.
     */
    public function show()
    {
        return view('contacts');
    }

    /**
     * Handle the form submission.
     */
    public function send(Request $request)
    {
        // Validate user input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        // For now, we’ll just display a success message (no email sending yet)
        return back()->with('success', 'Message sent successfully!');
    }
}


