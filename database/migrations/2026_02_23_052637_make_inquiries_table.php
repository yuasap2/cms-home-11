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
        Schema::create('inquiries',function(Blueprint $table){
            $table->id();
            $table->string('status')->nullable;
            $table->string('company')->nullable();
            $table->string('name',50);
            $table->string('furigana')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->string('job')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('password')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('prefecture')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->text('remarks')->nullable();
            $table->text('inquiry_details')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
