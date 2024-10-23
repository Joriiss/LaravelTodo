<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request)
    {
        // Retrieve validated input data
        $validated = $request->validated();

        // Handle the form submission (e.g., send an email, save to database)
        // For demonstration, we'll just return the data to the view
        return back()->with('success', 'Your message has been sent!');
    }
}
