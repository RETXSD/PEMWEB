<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'id' => 1,
            'name' => 'Sample Product',
            'description' => 'This is a sample product description.',
            'image' => '',
            'price' => 'RP 100.000', // Added price
            'stock' => 100, 
            'category' => 'Sample Category', // Added category
        ]);
    }
}