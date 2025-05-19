<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('shop/',function(){
    return view('frontend.shop');
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

Route::prefix('products')->as('products.')->group(function(){
    Route::get('{slug}/show',[ProductController::class,'show'])->name('show');
});
