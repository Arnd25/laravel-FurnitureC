<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    public function run(): void
    {
        $Promotions = [
            [
                'title' => 'Promotion 1',
                'description' => 'Description 1',
                'image' => 'image 1',
                'date' => '23.04.2004',
            ],
            [
                'title' => 'Promotion 2',
                'description' => 'Description 2',
                'image' => 'image 2',
                'date' => '23.04.2004',
            ],
            [
                'title' => 'Promotion 3',
                'description' => 'Description 3',
                'image' => 'image 3',
                'date' => '23.04.2004',
            ],
        ];
    }
}
