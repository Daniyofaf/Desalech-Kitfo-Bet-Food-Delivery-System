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
            'food' => 'required',
            'image' => 'required|image', // Adjust validation based on your requirements
            'message' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $validatedData['image'] = $imageName; // Update the image field in the data to store in the database
        }
        


        // Store the form data in the database using the ContactForm model
        ContactForm::create($validatedData);

        // Redirect or perform any other action after submitting the form
        return redirect()->route('admin.user_form')->with('success', 'Form submitted successfully!');

        // return view('admin/user_form')->with('success', 'Form submitted successfully!');

    }

    public function index()
    {

        $contacts = ContactForm::all(); // Retrieve all contact form entries

        //dd($contacts); // Check if this dumps data; if yes, then data is being retrieved


        return view('admin.dashboard', ['contacts' => $contacts]);
    }

    public function approveContact($id)
    {
        // Find the contact by ID and update its status as approved
        $contact = ContactForm::findOrFail($id);
        $contact->status = 'approved';
        $contact->save();

        // Redirect back or to any other page as needed
        return redirect()->back()->with('success', 'Contact approved successfully!');
    }

    public function declineContact($id)
    {
        // Find the contact by ID and update its status as declined
        $contact = ContactForm::findOrFail($id);
        $contact->status = 'declined';
        $contact->save();

        // Redirect back or to any other page as needed
        return redirect()->back()->with('success', 'Contact declined successfully!');
    }

    public function index()
    {
        
        $contacts = ContactForm::all(); // Retrieve all contact form entries

        //dd($contacts); // Check if this dumps data; if yes, then data is being retrieved


        return view('admin/dashboard', ['contacts' => $contacts]);
    }


}
