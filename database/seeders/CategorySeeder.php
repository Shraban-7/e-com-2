<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
                'icon' => 'fas fa-tv',
                'subcategories' => ['Mobile Phones', 'Laptops', 'Cameras'],
                'is_home' => 1
            ],
            [
                'name' => 'Fashion',
                'icon' => 'fas fa-tshirt',
                'subcategories' => ['Men', 'Women', 'Accessories'],
                'is_home' => 1
            ],
            [
                'name' => 'Home & Kitchen',
                'icon' => 'fas fa-blender',
                'subcategories' => ['Furniture', 'Cookware', 'Decor'],
            ],
            [
                'name' => 'Books',
                'icon' => 'fas fa-book',
                'subcategories' => ['Fiction', 'Non-fiction', 'Comics'],
            ],
            [
                'name' => 'Beauty & Personal Care',
                'icon' => 'fas fa-spa',
                'subcategories' => ['Skincare', 'Makeup', 'Hair Care'],
            ],
            [
                'name' => 'Sports & Outdoors',
                'icon' => 'fas fa-football-ball',
                'subcategories' => ['Fitness', 'Camping', 'Cycling'],
                'is_home' => 1
            ],
            [
                'name' => 'Toys & Games',
                'icon' => 'fas fa-puzzle-piece',
                'subcategories' => ['Educational', 'Board Games', 'Action Figures'],
            ],
            [
                'name' => 'Automotive',
                'icon' => 'fas fa-car',
                'subcategories' => ['Car Accessories', 'Motorcycle Parts', 'Tools'],
            ],
            [
                'name' => 'Pet Supplies',
                'icon' => 'fas fa-dog',
                'subcategories' => ['Food', 'Toys', 'Grooming'],
            ],
            [
                'name' => 'Health',
                'icon' => 'fas fa-heartbeat',
                'subcategories' => ['Supplements', 'Medical Equipment', 'Wellness'],
            ],
        ];

        foreach ($categories as $cat) {
            $parent = Category::create([
                'name' => $cat['name'],
                'slug' => Str::slug($cat['name']),
                'category_id' => null,
                'description' => "{$cat['name']} products",
                'icon' => $cat['icon'],
                'image' => strtolower(Str::slug($cat['name'])) . '.jpg',
                'is_active' => true,
                'position' => 1,
                'is_home' => $cat['is_home'] ?? false,
            ]);

            foreach ($cat['subcategories'] as $sub) {
                Category::create([
                    'name' => $sub,
                    'slug' => Str::slug($sub),
                    'category_id' => $parent->id,
                    'description' => "$sub under {$cat['name']}",
                    'icon' => null,
                    'image' => null,
                    'is_active' => true,
                    'position' => 2,
                ]);
            }
        }
    }
}
