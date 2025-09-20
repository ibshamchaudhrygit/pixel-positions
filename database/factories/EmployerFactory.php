<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory; // ✅ Import User model

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(), // Generates a fake name
            'logo' => fake()->imageUrl(), // Stores a fake image URL for the logo
            'user_id' => User::factory(), // Associates with a User using the User Factory
        ];
    }
}
