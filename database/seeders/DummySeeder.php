<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ChatMessages;
use App\Models\Consultations;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DateTime;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['username' => 'User X', 'email' => 'alice@example.com', 'role_id' => 1],
            ['username' => 'Consultant Y', 'email' => 'bob@example.com', 'role_id' => 2],
            ['username' => 'Admin Z', 'email' => 'charlie@example.com', 'role_id' => 3],
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

        $consultations = [
            ['user_id' => 1, 'consultant_id' => 2, 'date' => new DateTime(), 'status' => 'ongoing'],
            ['user_id' => 1, 'consultant_id' => 2, 'date' => new DateTime(), 'status' => 'ongoing'],
        ];

        foreach ($consultations as $consultation) {
            Consultations::factory()->create($consultation);
        }

        $chatMessages = [
            ['consultation_id' => 1, 'sender_id' => 1, 'message' => 'Hello, I would like to book a consultation.', 'sent_at' => now()],
            ['consultation_id' => 1, 'sender_id' => 2, 'message' => 'Sure, when would you like to book the consultation?', 'sent_at' => now()],
            ['consultation_id' => 1, 'sender_id' => 1, 'message' => 'How about tomorrow at 10am?', 'sent_at' => now()],
            ['consultation_id' => 1, 'sender_id' => 2, 'message' => 'That works for me.', 'sent_at' => now()],
            ['consultation_id' => 2, 'sender_id' => 1, 'message' => 'Hello, This is the 2nd room.', 'sent_at' => now()],
            ['consultation_id' => 2, 'sender_id' => 2, 'message' => 'Yes we are at the 2nd room', 'sent_at' => now()],
            ['consultation_id' => 2, 'sender_id' => 1, 'message' => 'Hopefully we are not mixed with the first room', 'sent_at' => now()],
            ['consultation_id' => 2, 'sender_id' => 2, 'message' => 'Hopefully.', 'sent_at' => now()],
        ];

        foreach ($chatMessages as $chatMessage) {
            ChatMessages::factory()->create($chatMessage);
        }
    }
}
