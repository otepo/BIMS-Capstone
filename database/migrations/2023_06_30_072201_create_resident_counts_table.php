<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident_counts', function (Blueprint $table) {
            $table->id();
            $table->integer('male_count')->default(0);
            $table->integer('female_count')->default(0);
            $table->integer('voter_count')->default(0);
            $table->integer('nonVoter_count')->default(0);
            $table->integer('blotter_count')->default(0);
            $table->integer('seniorCitizen_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resident_counts');
    }
};
