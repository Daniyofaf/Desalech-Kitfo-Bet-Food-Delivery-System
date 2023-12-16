<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function registerSubmit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
        ]);

        // Create a new user
        $user = User::create([
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Hash the password
        ]);

        // Redirect or respond as needed
        return redirect('/')->with('success', 'Registration successful!');
    }
    public function store(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');
    // Process form data, validate, and save to database
}


    
}
