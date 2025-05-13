<?php

use App\Models\Category;
use App\Models\product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

define('CURRENCY_SYMBOL', '৳');
define('CURRENCY_NAME', 'BDT');

if (!function_exists('str_slug')) {
    function str_slug($title)
    {
        return Str::slug($title);
    }
}

if (!function_exists('generateFileName')) {
    function generateFileName($file)
    {
        return time() . rand(1, 9999) . '.' . $file->extension();
    }
}

if (!function_exists('upload_file')) {
    function upload_file($file, $directory, $disk = 'public')
    {
        if (!Storage::disk($disk)->exists($directory)) {
            Storage::disk($disk)->makeDirectory($directory);
        }

        $fileName =  time() . rand(1, 9999) . '.' . $file->extension();
        $path = $directory . '/' . $fileName;
        Storage::disk($disk)->put($path, File::get($file));

        return $path;
    }
}

if (!function_exists('storage_url')) {
    function storage_url($file, $disk = 'public')
    {
        return Storage::disk($disk)->url($file);
    }
}

if (!function_exists('delete_file')) {
    function delete_file($file)
    {
        Storage::disk('public')->delete($file);
    }
}

if (!function_exists('money')) {
    function money($amount)
    {
        return CURRENCY_SYMBOL . ' ' . $amount;
    }
}

if (!function_exists('nav_categories')) {
    function nav_categories()
    {
        return Category::with('subcategories')
        ->where('position', 1)->take(8)->get();
    }
}

if (!function_exists('featuredProducts')) {
    function featuredProducts()
    {
        $featureProducts =product::where('is_featured',true)->take(20)->latest()->get();
        return $featureProducts;
    }
}
