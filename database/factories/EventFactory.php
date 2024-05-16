<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $now = new DateTime();
        $futureDateTime = $this->faker->dateTimeBetween($now, '+1 year');
        $formattedDateTime = $futureDateTime->format('F d, Y - h:i A');
    
        return [
            "title" => $this->faker->sentence(),
            "tags" => "health, free, covid",
            "when" => $formattedDateTime,
            "location" => $this->faker->city(),
            "description" => $this->faker->paragraph(5),
        ];
    }
}
