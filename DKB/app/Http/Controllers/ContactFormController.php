<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {

        // dd($request->all());


        // Validate and store the form data
        $validatedData = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'address' => 'required',
            'image' => 'required|image', // Adjust validation based on your requirements
            'message' => 'required',
        ]);

        
        // Store the form data in the database using the ContactForm model
        ContactForm::create($validatedData);

        // Redirect or perform any other action after submitting the form
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
