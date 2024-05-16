<?php

use App\Models\Resident;
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
        function generateResidentIdNumber()
        {
        $currentYear = date('y');
        $currentMonth = date('m');
        $randomDigits = strval(10000 + mt_rand(0, 90000));
        return "{$currentYear}{$currentMonth}{$randomDigits}";
        }
    
        Schema::create('residents', function (Blueprint $table) {
        $table->id('residentId');
        $table->string('lastName');
        $table->string('firstName');
        $table->string('middleName')->nullable();;
        $table->string('suffix')->nullable();
        $table->string('gender');
        $table->date('dateOfBirth');
        $table->string('birthPlace')->nullable();
        $table->string('age')->nullable();
        $table->enum('seniorCitizen', ['senior', 'nonSenior']);
        $table->enum('student', ['student', 'graduate', 'not applicable']);
        $table->enum('occupation', ['employed', 'unEmployed']);
        $table->enum('voter', ['voter', 'nonVoter']);
        $table->string('civilStatus');
        $table->string('bloodType')->nullable();
        $table->string('nationality');
        $table->string('monthlyIncome');
        // $table->string('householdNumber');
        $table->string('lengthOfStay');
        $table->string('highestEducationalAttainment');
        $table->string('purok')->nullable();
        $table->string('contactNumber')->nullable();
        $table->string('contactNumber2')->nullable();
        $table->string('houseNumber')->nullable();
        $table->string('streetName')->nullable();
        $table->string('identification')->nullable();
        $table->string('email');
        $table->string('password');
        $table->string('userRole')->nullable()->default('Resident');
        $table->string('userLevel')->nullable()->default('Resident');
        $table->enum('status', ['Approved', 'Pending', 'Deny'])->default('Pending');       
        $table->timestamps();
        });

        // Schema::table('residents', function(Blueprint $table) {
        //     $table->foreignId('user_id')->nullable()->constrained('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('residents');
    }
};
