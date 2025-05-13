<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Hero;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['categories'] = Category::category()->get();
        $data['hero_sliders'] = Hero::slider()->get();
        $data['hero_promos'] = Hero::promo()->get();
        $data['brands'] = Brand::latest()->take(6)->get();
        $data['homeCategory'] = Category::where('is_home', 1)->with(['products' => function ($q) {
            $q->limit(12);
        }])->get();

        return view('frontend.\home',$data);
    }
}
