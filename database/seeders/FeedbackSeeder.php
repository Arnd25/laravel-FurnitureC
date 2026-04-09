<?php

namespace Database\Seeders;


use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feedback = [
            [
                'name' => 'name 1',
                'email' => 'email 1',
                'text' => '1232ff1',
            ],
            [
                'name' => 'name 1',
                'email' => 'email 1',
                'text' => '1232ff1',
            ],
            [
                'name' => 'name 1',
                'email' => 'email 1',
                'text' => '1232ff1',
            ],
        ];
        foreach($feedback as $message) {
            Feedback::create($message);
        }
    }
}
