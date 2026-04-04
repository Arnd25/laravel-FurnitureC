<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $advantages = [
            [
                'name' => 'Advantage 1',
                'description' => 'Description of Advantage 1',
                'image' => 'advantage1.jpg',
            ],
            [
                'name' => 'Advantage 2',
                'description' => 'Description of Advantage 2',
                'image' => 'advantage2.jpg',
            ],
            [
                'name' => 'Advantage 3',
                'description' => 'Description of Advantage 3',
                'image' => 'advantage3.jpg',
            ],
        ];

        foreach ($advantages as $advantage) {
            Advantage::create($advantage);
        }
    }
}
