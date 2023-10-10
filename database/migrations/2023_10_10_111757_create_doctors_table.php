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
            $table->string('First Name');
            $table->string('Last Name');            
            $table->bigInteger('Contact');
            $table->string('Province');
            $table->string('Province');
            $table->string('Municipality');
            $table->int('Ward');
            $table->string('tole');
            $table->string('Department');
            $table->enum('gender',['male','female']);
            $table->string('specialization');
            $table->binary('photo')->nullable();
            $table->date('Date Of Birth');
            $table->foreign('user_id')
              ->references('id')->on('users')->onDelete('cascade');
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
