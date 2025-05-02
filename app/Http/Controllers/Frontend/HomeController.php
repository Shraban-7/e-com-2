<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hero;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        $data['categories'] = Category::category()->get();
        $data['hero_sliders'] = Hero::slider()->get();
        $data['hero_promos'] = Hero::promo()->get();

        return view('frontend.home',$data);
    }
}
