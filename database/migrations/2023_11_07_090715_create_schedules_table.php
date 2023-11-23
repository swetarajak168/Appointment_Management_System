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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nepali_date');
            $table->string('english_date');
            $table->string('start_time');
            $table->string('end_time');
            $table->enum('status',['pending','approved','canceled']);

            $table->foreignId('doctor_id')->constrained('doctors');
            $table->foreignId('user_id')->constrained('users');
            $table->softDeletes();
          

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
