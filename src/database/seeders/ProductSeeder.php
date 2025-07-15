<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Sample Product',
            'description' => 'This is a sample product description.',
            'price' => 19.99,
            'stock' => 100,
            'category' => 'General',
            'image' => null, // Optional: you can set a default image path if needed
        ]);
        
        // You can create more products as needed
        // \App\Models\Product::factory()->count(10)->create();
    }
}
