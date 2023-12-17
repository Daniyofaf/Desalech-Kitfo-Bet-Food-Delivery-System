<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\ContactForm;

class UserController extends Controller {
    public function showForm() {
        return view('admin.user_form'); // This view will contain the form for admin actions related to users
    }

    public function store(Request $request)
{
    $contact = new ContactForm();
    $contact->full_name = $request->input('FullName');
    $contact->email = $request->input('email');
    $contact->phone_number = $request->input('phone number');
    $contact->address = $request->input('address');
    $contact->message = $request->input('message');

    // Handle file upload if there's a file
    if ($request->hasFile('screenshot')) {
        $file = $request->file('screenshot');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('screenshots', $filename);
        $contact->screenshot = $filename;
    }

    $contact->save();

    return redirect()->back()->with('success', 'Form submitted successfully!');
}

}