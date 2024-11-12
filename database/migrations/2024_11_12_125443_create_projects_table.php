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
            $table->string('main_title');
            $table->string('main_image')->nullable();
            $table->string('main_heading');
            $table->string('main_description');
            $table->string('first_project');
            $table->string('first_heading');
            $table->string('first_description');
            $table->string('first_image')->nullable();
            $table->string('second_project');
            $table->string('second_heading');
            $table->string('second_description');
            $table->string('second_image')->nullable();
            $table->string('third_project');
            $table->string('third_heading');
            $table->string('third_description');
            $table->string('third_image')->nullable();
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
