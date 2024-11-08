<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidates>
 */
class CandidatesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dsCandidateName' => $this->faker->name,
            'dsPartyAffiliation' => $this->faker->randomElement(['Democrat', 'Republican']),
            'dsElectionPosition' => $this->faker->randomElement(['President', 'Vice President', 'Senator', 'Governor', 'Mayor']),
        ];
    }
}