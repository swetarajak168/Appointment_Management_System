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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();           
            $table->string('book_date_bs'); 
            $table->string('book_date_ad'); 
            $table->longText('remarks')->nullable(); 
            $table->string('start_time')->nullable(); 
            $table->string('end_time')->nullable(); 
            $table->enum('status',['approved','pending','canceled']);
            // Foreign key constraints
            $table->foreignId('patients_id')
                ->constrained('patients');
            $table->foreignId('doctor_id')->constrained('doctors');
            $table->foreignId('schedule_id')->constrained('schedules');
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
