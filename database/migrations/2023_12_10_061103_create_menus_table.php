<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Name');
            $table->enum('Type', [1, 2, 3]);
            $table->string('Order');
            $table->unsignedBigInteger('module_id')->nullable();
            $table->unsignedBigInteger('page_id')->nullable();
            $table->foreign('module_id')
                ->references('id')
                ->on('modules');
            $table->foreign('page_id')
                ->references('id')
                ->on('pages');
            $table->string('external_link')->nullable();
            $table->integer('parent_id')->nullable();
            $table->boolean('status')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
