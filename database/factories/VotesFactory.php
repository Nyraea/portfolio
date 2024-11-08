<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Votes>
 */
class VotesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mgVoterID' => $this->faker->numberBetween(1, 1000),
            'mgCandidateID' => $this->faker->numberBetween(1, 25),
            'mgTimestamp' => $this->faker->dateTimeBetween('-2 days', 'now')->format('Y-m-d H:i:s'),
        ];
    }
}
