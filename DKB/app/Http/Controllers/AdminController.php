<?php

// Inside AdminController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\ContactForm;

class AdminController extends Controller
{
    public function showDashboard()
    {

        // $contacts = ContactForm::all();
    // return view('admin.dashboard', compact('contacts'));

        return view('admin.dashboard'); // Or any other admin view
    }

    // Add other methods for admin functionality here
}
