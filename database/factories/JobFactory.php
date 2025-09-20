<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(), // Generates a fake job title
            'salary' => fake()->randomElement(['50,000 USD', '90,000 USD', '150,000 USD']), // Randomly selects a salary
            'location' => 'remote', // Hardcoded location
            'schedule' => 'fulltime', // Default schedule
            'url' => fake()->url(), // Generates a fake URL for the job listing
            'featured' => false, // Default featured status
            'employer_id' => Employer::factory(), // Associates with an Employer using the Employer Factory
        ];
    }
}
