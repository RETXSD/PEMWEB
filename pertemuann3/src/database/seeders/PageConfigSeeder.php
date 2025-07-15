<?php

namespace Database\Seeders;

use App\Models\PageConfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageConfig::create([
            'title' => 'Pertemuan N3',
            'detail' => 'the best i ever had',
            'image' => 'https://example.com/image.jpg',
        ]);
    }
}
