<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Sale::create([
        'product_id' => 1,
        'quantity' => 2,
        'total_price' => 200000, // misal
    ]);
}

}
