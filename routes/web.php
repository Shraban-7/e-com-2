<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('shop/',function(){
    return view('frontend.shop');
});

Route::get('product-details/',function(){
    return view('frontend.product-details');
});

Route::get('checkout/',function(){
    return view('frontend.checkout');
});

Route::get('order-details',function(){
    return view('frontend.order-details');
});

Route::get('user-profile',function(){
    return view('frontend.user-profile');
});
