<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ChatMessages;
use App\Models\Consultations;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'User X', 'email' => 'alice@example.com', 'role_id' => 1],
            ['name' => 'Consultant Y', 'email' => 'bob@example.com', 'role_id' => 2],
            ['name' => 'Admin Z', 'email' => 'charlie@example.com', 'role_id' => 3],
        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }

        $products = [
            ['name' => 'Product A'],
            ['name' => 'Product B'],
            ['name' => 'Product C'],
        ];

        foreach ($products as $product) {
            Products::factory()->create($product);
        }

        // $consultations = [
        //     ['user_id' => 1, 'consultant_id' => 2],
        //     ['user_id' => 1, 'consultant_id' => 2],
        //     ['user_id' => 1, 'consultant_id' => 2],
        // ];
    }
}
