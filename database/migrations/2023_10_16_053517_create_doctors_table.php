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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('license_no');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();                    
            $table->bigInteger('Contact');
            $table->string('Province');
            $table->string('District');
            $table->string('Municipality');
            $table->integer('Ward');
            $table->string('tole');            
            $table->enum('gender',['male','female','others']);
            $table->string('dob');
            $table->string('english_dob');
            $table->string('specialization');
            $table->string('Department');
            $table->string('image')->nullable();                      
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
              ->references('id')
              ->on('users');
              
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }

   
};
