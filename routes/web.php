<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('shop/',function(){
    return view('frontend.shop');
});

Route::get('product-details/',function(){
    return view('frontend.product-details');
});
