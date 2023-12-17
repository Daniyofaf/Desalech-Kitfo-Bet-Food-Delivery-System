<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

function authenticated(Request $request, $user)
{
    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('admin.user_form');
    }
}
