<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->with('images')->firstOrFail();
        $recent = session()->get('recently_viewed', []);

        $recent = array_diff($recent, [$product->id]);

        array_unshift($recent, $product->id);

        $recent = array_slice($recent, 0, 6);

        session()->put('recently_viewed', $recent);

        $related_products = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->limit(18)
            ->get();

        $recentlyViewedProducts = Product::whereIn('id', $recent)
            ->orderByRaw("FIELD(id, " . implode(',', $recent) . ")")
            ->get();

        return view('frontend.products.show', [
            'product'                => $product,
            'related_products'       => $related_products,
            'recentlyViewedProducts' => $recentlyViewedProducts,
        ]);
    }

}
