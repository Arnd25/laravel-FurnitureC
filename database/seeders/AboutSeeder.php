<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::create([
            'title' => 'Title',
            'description' => 'sfhdskjf hdskjfhdkjshdkjshfsdhfkjdhskfjhsdkjhf dkjshfk',
            'image' => 'about.jpg',
        ]);
    }
}
