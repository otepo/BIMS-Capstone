<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Official>
 */
class OfficialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            
            'lastName' => $this->faker->lastName,
            'firstName' => $this->faker->firstName,
            'middleName' => $this->faker->firstName,
            'position' => $this->faker->jobTitle,
            'contactNumber' => $this->faker->phoneNumber,
            
        ];
    }
}
