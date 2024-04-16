<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;    

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Pro',
            'username' => 'pro',
            'email' => 'pro@example.com',
        ]);

        User::factory()->create([
            'name' => 'John',
            'username' => 'john',
            'email' => 'john@example.com',
        ]);

        User::factory()->create([
            'name' => 'Alex',
            'username' => 'alex',
            'email' => 'alex@example.com',
        ]);
    }
}
