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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Organization Name');
            $table->string('Position');
            $table->year('Start Date');
            $table->year('End Date');
            $table->longText('Job Description');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')
              ->references('id')
              ->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
