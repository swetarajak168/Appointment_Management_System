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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->string('institution');
            $table->string('completionDate');
            $table->string('CompletionDateAD');
            $table->string('board');
            $table->double('marks');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')
            ->references('id')->on('doctors')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
