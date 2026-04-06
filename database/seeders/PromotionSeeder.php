<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    public function run(): void
    {
        $Promotions = [
            [
                'title' => 'Promotion 1',
                'description' => 'Description 1',
                'image' => 'image1.png',
                'date' => '23.04.2004',
            ],
            [
                'title' => 'Promotion 2',
                'description' => 'Description 2',
                'image' => 'image2.png',
                'date' => '23.04.2004',
            ],
            [
                'title' => 'Promotion 3',
                'description' => 'Description 3',
                'image' => 'image3.png',
                'date' => '23.04.2004',
            ],
        ];
        foreach($Promotions as $promotion) {
            Promotion::create($promotion);
        }
    }
}
