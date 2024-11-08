<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voters>
 */
class VotersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'maVoterName' => $this->faker->name,
            'maDateOfBirth' => $this->faker->dateTimeBetween('-80 years', '-18 years')->format('Y-m-d'),
            'maGender' => $this->faker->randomElement(['Male', 'Female']),
            'maContactNumber' => $this->faker->phoneNumber,
        ];
    }
}
