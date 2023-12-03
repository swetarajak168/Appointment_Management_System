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
            $table->string('organization_name');
            $table->string('position');
            $table->string('startDate');
            $table->string('endDate')->nullable();
            $table->string('startEnglishDate');
            $table->string('endEnglishDate')->nullable();
            $table->longText('jobDescription');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')
              ->references('id')->on('doctors')
              ->onDelete('cascade');
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
