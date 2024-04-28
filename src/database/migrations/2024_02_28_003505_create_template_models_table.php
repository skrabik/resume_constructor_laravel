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
        Schema::create('template_models', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->timestamps();
            $table->text('description')->nullable();
            $table->text('template_url')->nullable();
            $table->text('download_url')->nullable();
            $table->text('image_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_models');
    }
};
