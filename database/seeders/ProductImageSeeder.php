<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            "products/images/grocery-prod-1-min.png",
            "products/images/grocery-prod-2-min.png",
            "products/images/grocery-prod-3-min.png",
            "products/images/grocery-prod-4-min.png",
            "products/images/grocery-prod-5-min.png",
            "products/images/grocery-prod-6-min.png",
            "products/images/grocery-prod-7-min.png",
            "products/images/grocery-prod-8-min.png",
            "products/images/electronic-prod-1-min.png",
            "products/images/electronic-prod-2-min.png",
            "products/images/electronic-prod-3-min.png",
            "products/images/electronic-prod-4-min.png",
            "products/images/electronic-prod-5-min.png",
            "products/images/electronic-prod-6-min.png",
            "products/images/electronic-prod-7-min.png",
            "products/images/electronic-prod-8-min.png",
            'products/images/light-deal-1-min.png',
            'products/images/light-deal-2-min.png',
            'products/images/light-deal-3-min.png',
            'products/images/light-deal-4-min.png',
            'products/images/light-deal-5-min.png',
            'products/images/int-pro-1-min.png'
        ];

        $products = Product::all();

        foreach ($products as $product) {
            $randomKeys = array_rand($images, 3);

            foreach ((array) $randomKeys as $key) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $images[$key],
                ]);
            }
        }
    }
}
