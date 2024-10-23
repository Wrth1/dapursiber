<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
