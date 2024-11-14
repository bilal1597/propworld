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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading');
            $table->string('main_image')->nullable();

            $table->string('first_heading');
            $table->string('first_description');
            $table->string('service1_heading');
            $table->string('service1_description');
            $table->string('service2_heading');
            $table->string('service2_description');
            $table->string('service3_heading');
            $table->string('service3_description');
            $table->string('service4_heading');
            $table->string('service4_description');

            $table->string('image1')->nullable();
            $table->string('image2')->nullable();

            $table->string('second_heading');
            $table->string('second_description');
            $table->string('special1_heading');
            $table->string('special1_description');
            $table->string('special2_heading');
            $table->string('special2_description');
            $table->string('special3_heading');
            $table->string('special3_description');
            $table->string('special4_heading');
            $table->string('special4_description');
            $table->string('special5_heading');
            $table->string('special5_description');
            $table->string('special6sa_heading');
            $table->string('special6_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
