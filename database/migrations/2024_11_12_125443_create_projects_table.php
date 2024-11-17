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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading');
            $table->string('main_description');
            $table->string('first_heading');
            $table->string('first_description');
            $table->string('point1');
            $table->string('point2');
            $table->string('point3');
            $table->string('image_heading');
            $table->string('vid_heading');
            $table->string('main_image')->nullable();
            $table->string('multi_image')->nullable();
            $table->string('pdf')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
