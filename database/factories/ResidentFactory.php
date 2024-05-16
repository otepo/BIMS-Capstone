<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ResidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    
    {
        // $user = User::create([
        //     'residentId' => $resident['residentId'],
        //     'email' => $resident['email'], // Replace with the resident's input email
        //     'password' => $resident['password'], 
        //     'userLevel' => 'resident',
        // ]);
        
        return [
            
            // 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ];
    }
}
