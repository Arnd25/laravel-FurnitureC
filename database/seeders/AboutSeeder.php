<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::create([
            'title' => 'Комфорт в каждой детали',
            'description' => 'Мебель, созданная для тёплых вечеров и безопасного детства. Эргономичные формы, экологичные материалы и честные цены.',
            'background'=> 'banner-bg.png'
        ]);
    }
}
