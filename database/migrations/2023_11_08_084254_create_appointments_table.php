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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date_bs'); 
            $table->string('date_ad')->nullable(); 
            $table->string('time_start'); ;
            $table->string('time_end'); ;
            $table->integer('limit')->nullable();
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')
              ->references('id')->on('doctors')->onDelete('cascade');
              $table->unsignedBigInteger('user_id');
              $table->foreign('user_id')
                ->references('id')
                ->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};