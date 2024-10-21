<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'dsFullName' => 'Dane Sze',
            'dsBirthday' => '1999-01-01',
            'dsEmail' => 'dane@gmail.com',
            'dsGender' => 'male',
            'dsContact' => '0912345678',
        ]);
    }
}
