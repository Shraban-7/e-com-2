<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'slider-1',
                'image' => 'hero/slider-1.webp',
                'is_slider' => 1
            ],
            [
                'title' => 'slider-2',
                'image' => 'hero/slider-2.webp',
                'is_slider' => 1
            ],
            [
                'title' => 'slider-3',
                'image' => 'hero/slider-3.webp',
                'is_slider' => 1
            ],
            [
                'title' => 'promo-1',
                'image' => 'hero/promo-1.webp'
            ],
            [
                'title' => 'promo-2',
                'image' => 'hero/promo-2.webp'
            ],
        ];

        foreach ($sliders as $slider) {
            Hero::create($slider);
        }
    }
}
