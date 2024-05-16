<?php

namespace Database\Factories;

use App\Models\Resident;
use Illuminate\Support\Str;
use App\Models\ResidentCount;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['Male', 'Female']);
    
        // // Increment the corresponding count based on the generated gender
        // if ($gender === 'Male') {
        //     $residentCount = ResidentCount::firstOrNew([]);
        //     $residentCount->male_count += 1;
        //     $residentCount->save();
        // } else {
        //     $residentCount = ResidentCount::firstOrNew([]);
        //     $residentCount->female_count += 1;
        //     $residentCount->save();
        // }
      
        $resident = Resident::create([
            'residentId' => generateResidentIdNumber(),
            'lastName' => $this->faker->lastName,
            'firstName' => $this->faker->firstName,
            'middleName' => $this->faker->optional()->firstName,
            'suffix' => $this->faker->optional()->suffix,
            'gender' => $gender,
            'dateOfBirth' => $this->faker->date(),
            'birthPlace' => $this->faker->city,
            'age' => $this->faker->numberBetween(18, 80),
            'civilStatus' => $this->faker->randomElement(['Single','Married','Widowed','Annulled','Divorced']),
            'bloodType' => $this->faker->randomElement(['A', 'B+', 'AB+', 'O+', 'A-', 'B-', 'AB-', 'O-']),
            'nationality' => 'Filipino',
            'occupation' => $this->faker->randomElement(['employed', 'unEmployed']),
            'monthlyIncome' => $this->faker->randomFloat(2, 0, 50000),
            'lengthOfStay' => $this->faker->numberBetween(1, 20),
            'highestEducationalAttainment' => $this->faker->randomElement(['Elementary','Junior High School','Senior High School','Vocational','College','Masteral','Doctorate']),
            'purok' => $this->faker->randomElement(['Purok 1', 'Purok 2', 'Purok 3']),
            'houseNumber' => $this->faker->buildingNumber,
            'streetName' => $this->faker->streetName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'),
            'voter' => $this->faker->randomElement(['voter', 'nonVoter']),
            'student' => $this->faker->randomElement(['student', 'graduate', 'not applicable']),
            'userRole'=> 'Resident',
            'userLevel' => 'Resident',
            'status' => 'Pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        return [
            'residentId' => $resident->residentId,
            'email' => $resident->email,
            'password' => 'password',
        ];
    }
    

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
