<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Roles;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Roles::factory()->create([
            'role_name' => 'User',
        ]);

        Roles::factory()->create([
            'role_name' => 'Consultant',
        ]);

        Roles::factory()->create([
            'role_name' => 'Admin',
        ]);
    }
}
