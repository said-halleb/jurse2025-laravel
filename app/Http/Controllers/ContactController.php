<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('home.index');
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Process form submission (e.g., send email, save to database)
        Mail::to('rimjridimc@gmail.com')->send(new ContactFormSubmitted($validatedData));

        // Redirect back with success message
        return redirect('/')->with('success', 'Your message has been sent successfully!');
    }
}
