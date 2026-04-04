<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'Product 1',
                'description' => 'Product 1 description',
                'price' => 1234,
                'image' => 'product1.jpg',
            ],
            [
                'title' => 'Product 2',
                'description' => 'Product 2 description',
                'price' => 1234,
                'image' => 'product2.jpg',
            ],
            [
                'title' => 'Product 3',
                'description' => 'Product 3 description',
                'price' => 1234,
                'image' => 'product3.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
