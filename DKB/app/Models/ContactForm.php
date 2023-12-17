<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    
    protected $table = 'contact_forms'; // Replace 'contact_forms' with your actual table name

    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'address',
        'image', // Assuming this is the field to store the screenshot file path
        'message',
    ];

}
