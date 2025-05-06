<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $categories = Category::with('subcategories')->get();
        $brands = Brand::pluck('id')->toArray();

        $thumbnails = [
            "products/thumbnails/grocery-prod-1-min.png",
            "products/thumbnails/grocery-prod-2-min.png",
            "products/thumbnails/grocery-prod-3-min.png",
            "products/thumbnails/grocery-prod-4-min.png",
            "products/thumbnails/grocery-prod-5-min.png",
            "products/thumbnails/grocery-prod-6-min.png",
            "products/thumbnails/grocery-prod-7-min.png",
            "products/thumbnails/grocery-prod-8-min.png",
            "products/thumbnails/electronic-prod-1-min.png",
            "products/thumbnails/electronic-prod-2-min.png",
            "products/thumbnails/electronic-prod-3-min.png",
            "products/thumbnails/electronic-prod-4-min.png",
            "products/thumbnails/electronic-prod-5-min.png",
            "products/thumbnails/electronic-prod-6-min.png",
            "products/thumbnails/electronic-prod-7-min.png",
            "products/thumbnails/electronic-prod-8-min.png",
            'products/thumbnails/light-deal-1-min.png',
            'products/thumbnails/light-deal-2-min.png',
            'products/thumbnails/light-deal-3-min.png',
            'products/thumbnails/light-deal-4-min.png',
            'products/thumbnails/light-deal-5-min.png',
            'products/thumbnails/int-pro-1-min.png'
        ];

        foreach ($categories as $category) {
            $faker->unique(true); 

            for ($i = 1; $i <= 20; $i++) {
                $name = $faker->unique()->words(3, true);
                $slug = Str::slug($name) . '-' . uniqid();
                $sku = strtoupper(Str::random(10));

                Product::create([
                    'category_id' => $category->id,
                    'subcategory_id' => $category->subcategories->isNotEmpty()
                        ? $category->subcategories->random()->id
                        : null,
                    'brand_id' => !empty($brands) ? $faker->randomElement($brands) : null,

                    'name' => $name,
                    'slug' => $slug,
                    'sku' => $sku,
                    'barcode' => $faker->ean13(),
                    'thumbnail' => $faker->randomElement($thumbnails),
                    'description' => $faker->paragraph(),

                    'purchase_price' => $faker->randomFloat(2, 100, 500),
                    'selling_price' => $faker->randomFloat(2, 600, 1000),
                    'discount_price' => $faker->optional()->randomFloat(2, 100, 300),
                    'tax_rate' => $faker->optional()->randomFloat(2, 5, 15),

                    'is_featured' => $faker->boolean(),
                    'is_bestselling' => $faker->boolean(),
                    'is_online' => true,
                    'is_pos' => true,
                    'status' => true,

                    'created_by' => 1,
                    'updated_by' => 1,
                ]);
            }
        }
    }
}
