<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_forms', function (Blueprint $table) {
                $table->increments('id');
                $table->string('full_name');
                $table->string('email');
                $table->string('phone_number');
                $table->string('address');
                $table->string('message');
                $table->string('food');
                $table->string('image');
                $table->string('status')->default('pending'); // Add a 'status' field with a default value of 'pending'
                $table->timestamps();
            });
            
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_forms');
    }
};
