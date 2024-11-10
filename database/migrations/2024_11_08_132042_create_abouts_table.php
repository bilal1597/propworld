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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading');
            $table->string('main_image')->nullable();
            $table->string('first_heading');
            $table->string('first_description');
            $table->string('existing_image')->nullable();
            $table->string('second_heading');
            $table->string('second_description');
            $table->string('third_heading');
            $table->string('third_description');
            $table->string('ceo_image')->nullable();
            $table->string('ceo2_image')->nullable();
            $table->string('title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
