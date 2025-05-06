<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'asus',
                'image' => 'brands/asus.webp'
            ],
            [
                'name' => 'google',
                'image' => 'brands/google.webp'
            ],
            [
                'name' => 'jbl',
                'image' => 'brands/jbl.webp'
            ],
            [
                'name' => 'boat',
                'image' => 'brands/boat.webp'
            ],
            [
                'name' => 'dell',
                'image' => 'brands/dell.webp'
            ],
            [
                'name' => 'cca',
                'image' => 'brands/cca.webp'
            ]
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
