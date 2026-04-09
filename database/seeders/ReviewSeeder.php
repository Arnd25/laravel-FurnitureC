<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'name' => 'name 1',
                'comment' => 'comment 1',
                'rating' => 1,
            ],
            [
                'name' => 'name 2',
                'comment' => 'comment 2',
                'rating' => 2,
            ],
            [
                'name' => 'name 3',
                'comment' => 'comment 3',
                'rating' => 3,
            ],
            [
                'name' => 'name 4',
                'comment' => 'comment 4',
                'rating' => 4,
            ],
            [
                'name' => 'name 5',
                'comment' => 'comment 5',
                'rating' => 5,
            ],
        ];
        foreach($reviews as $review) {
            Review::create($review);
        }
    }
}
