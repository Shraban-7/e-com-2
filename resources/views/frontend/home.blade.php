@extends('frontend.layouts.app')

@section('contents')
    <section class="mt-8">
        <div class="grid grid-cols-12 gap-4 items-stretch min-h-[400px] max-w-7xl mx-auto">
            <!-- Left Column with Slider -->
            <div class="col-span-12 md:col-span-8">
                <div class="h-full">
                    <!-- Swiper -->
                    <div class="swiper h-full rounded-lg overflow-hidden">
                        <div class="swiper-wrapper">
                            @foreach ($hero_sliders as $slider)
                                <img src="{{ storage_url($slider->image) }}" class="swiper-slide bg-cover bg-center">
                            @endforeach
                        </div>

                        <!-- Optional controls -->
                        <div class="swiper-pagination !text-primary-600"></div>
                        <div class="swiper-button-prev !text-primary-600 !fill-primary-600"></div>
                        <div class="swiper-button-next !text-primary-600 !fill-primary-600"></div>
                    </div>
                </div>
            </div>

            <!-- Right Side -->
            <div class="col-span-12 md:col-span-4 flex flex-col gap-4">
                @foreach ($hero_promos as $promo)
                    <div class="flex-1 bg-cover bg-center rounded-lg p-4 flex items-center justify-center text-white text-xl font-semibold"
                        style="background-image: url('{{ storage_url($promo->image) }}')">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- category -->
    <section class="py-12">
        <h2 class="text-3xl font-bold text-center mb-10 text-neutral-800">Shop by Category</h2>

        <div class="max-w-7xl mx-auto flex flex-wrap justify-center gap-6">
            @foreach ($categories as $category)
                <div
                    class="w-[calc(100%/2-1.5rem)] sm:w-[calc(100%/3-1.5rem)] md:w-[calc(100%/4-1.5rem)] lg:w-[calc(100%/6-1.5rem)] bg-neutral-100 hover:bg-neutral-200 p-5 rounded-2xl text-center shadow-sm hover:shadow-md transition cursor-pointer">
                    <div class="text-primary-400 text-3xl mb-3">
                        <i class="{{ $category->icon }}"></i>
                    </div>
                    <h3 class="text-sm font-semibold text-neutral-700">{{ ucfirst($category->name) }}</h3>
                </div>
            @endforeach
        </div>
    </section>

    <!-- feature products section -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-neutral-800">Featured Products</h2>
            </div>

            <!-- Featured Products Swiper -->
            <div class="swiper-container featured-products-swiper">
                <div class="swiper-wrapper">
                    @foreach (featuredProducts()->take(6) as $product)
                    <div class="swiper-slide">
                        <div class="product-card shadow-sm hover:shadow-md transition-shadow duration-300 rounded-lg overflow-hidden bg-white">
                            <div class="relative overflow-hidden">
                                <!-- Product image with zoom effect -->
                                <img src="{{ storage_url($product->thumbnail) ?? '/api/placeholder/300/300' }}"
                                    alt="{{ $product['name'] }}"
                                    class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105" />
                            </div>

                            <div class="p-4">
                                <!-- Product name -->
                                <h3 class="text-lg font-medium text-gray-900 mb-2 line-clamp-1 leading-snug">{{ $product->name }}</h3>

                                <!-- Product price & button -->
                                <div class="flex justify-between items-center">
                                    <p class="text-xl font-bold text-gray-900">
                                        {{ money($product->selling_price, 2) }}</p>

                                    <a href="#"
                                        class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>

                <!-- Add navigation buttons -->
                <div class="swiper-button-next text-gray-900"></div>
                <div class="swiper-button-prev text-gray-900"></div>
            </div>
        </div>
    </section>

    <!-- feature banners -->
    <section class="max-w-7xl mx-auto">
        <!-- Main Promotional Banner -->
        <div class="relative overflow-hidden bg-gradient-to-r from-primary-600 to-primary-800 rounded-xl shadow-xl">
            <!-- Background Pattern (optional) -->
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    <defs>
                        <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                            <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="1" />
                        </pattern>
                    </defs>
                    <rect width="100" height="100" fill="url(#grid)" />
                </svg>
            </div>

            <div class="relative flex flex-col md:flex-row items-center">
                <!-- Left Content (Text) -->
                <div class="p-8 md:p-12 lg:p-16 md:w-3/5 text-white">
                    <div
                        class="inline-block px-4 py-1 mb-4 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold">
                        Limited Time Offer
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Summer Sale Collection</h2>
                    <p class="text-lg md:text-xl opacity-90 mb-6 max-w-lg">
                        Discover our exclusive summer collection with up to 50% off on selected items.
                        Don't miss this opportunity!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#"
                            class="inline-block bg-white text-primary-700 hover:bg-neutral-100 font-semibold px-6 py-3 rounded-lg transition-colors duration-300 text-center">
                            Shop Now
                        </a>
                        <a href="#"
                            class="inline-block bg-transparent border-2 border-white text-white hover:bg-white/10 font-semibold px-6 py-3 rounded-lg transition-colors duration-300 text-center">
                            Learn More
                        </a>
                    </div>

                    <!-- Countdown Timer (Optional) -->
                    <div class="mt-8 flex gap-4">
                        <div class="flex flex-col items-center">
                            <span class="text-2xl font-bold">02</span>
                            <span class="text-xs uppercase opacity-75">Days</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="text-2xl font-bold">18</span>
                            <span class="text-xs uppercase opacity-75">Hours</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="text-2xl font-bold">45</span>
                            <span class="text-xs uppercase opacity-75">Minutes</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <span class="text-2xl font-bold">22</span>
                            <span class="text-xs uppercase opacity-75">Seconds</span>
                        </div>
                    </div>
                </div>

                <!-- Right Content (Image) -->
                <div class="md:w-2/5 p-6 md:p-0">
                    <div class="relative h-64 md:h-full min-h-[250px]">
                        <!-- Replace with your product image -->
                        <img src="https://placehold.co/600x400/ffffff/0284c7?text=Summer+Collection"
                            alt="Summer Collection Products"
                            class="absolute inset-0 w-full h-full object-cover rounded-lg md:rounded-l-none md:rounded-r-xl">
                        <!-- Discount Badge -->
                        <div
                            class="absolute top-4 right-4 bg-yellow-400 text-primary-800 text-xl font-bold rounded-full w-16 h-16 flex items-center justify-center transform rotate-12">
                            -50%
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Secondary Promotional Banners (Optional) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
            <!-- Secondary Banner 1 -->
            <div class="bg-gradient-to-r from-purple-600 to-indigo-600 rounded-xl overflow-hidden shadow-lg">
                <div class="p-8 text-white">
                    <h3 class="text-2xl font-bold mb-2">New Arrivals</h3>
                    <p class="mb-4 opacity-90">Check out our latest products</p>
                    <a href="#"
                        class="inline-block bg-white text-indigo-700 hover:bg-neutral-100 font-medium px-4 py-2 rounded-lg transition-colors duration-300">
                        Explore
                    </a>
                </div>
            </div>

            <!-- Secondary Banner 2 -->
            <div class="bg-gradient-to-r from-amber-500 to-orange-500 rounded-xl overflow-hidden shadow-lg">
                <div class="p-8 text-white">
                    <h3 class="text-2xl font-bold mb-2">Free Shipping</h3>
                    <p class="mb-4 opacity-90">On all orders over $50</p>
                    <a href="#"
                        class="inline-block bg-white text-orange-600 hover:bg-neutral-100 font-medium px-4 py-2 rounded-lg transition-colors duration-300">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- category wise products -->
    <section class="py-8 max-w-7xl mx-auto">
        @foreach ($homeCategory as $category)
            @if ($category->products->count())
                <div id="{{ Str::slug($category->name) }}" class="mb-16">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-neutral-900 flex items-center">
                            <i class="fas fa-laptop-code mr-2 text-primary-600"></i>
                            {{ $category->name }}
                        </h2>
                        <a href="#" class="text-primary-600 hover:text-primary-800 font-medium flex items-center">
                            View All <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4">
                        @foreach ($category->products as $product)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                                <div class="relative">
                                    <img src="{{ storage_url($product->thumbnail) }}" alt="{{ $product->name }}"
                                        class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105">
                                    @if ($product->badge)
                                        <div
                                            class="absolute top-2 right-2 bg-{{ $product->badge_color ?? 'blue' }}-500 text-white text-xs font-bold px-2 py-1 rounded">
                                            {{ strtoupper($product->badge) }}
                                        </div>
                                    @endif
                                </div>
                                <div class="p-4">
                                    <h3 class="text-sm font-semibold text-neutral-900 mb-1 line-clamp-1 leading-snug">{{ $product->name }}</h3>
                                    <div class="flex text-yellow-400 text-xs mb-1">
                                        @php
                                            $rating = $product->rating ?? 4;
                                            $fullStars = floor($rating);
                                            $halfStar = $rating - $fullStars >= 0.5;
                                        @endphp
                                        @for ($i = 0; $i < $fullStars; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor
                                        @if ($halfStar)
                                            <i class="fas fa-star-half-alt"></i>
                                        @endif
                                        @for ($i = $fullStars + $halfStar; $i < 5; $i++)
                                            <i class="far fa-star"></i>
                                        @endfor
                                        <span class="text-neutral-500 ml-1">({{ number_format($rating, 1) }})</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <span
                                            class="text-primary-600 font-bold">{{ money($product->selling_price) }}</span>
                                        <button
                                            class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </section>


    <!-- Our Brand Partners -->
    <section class="pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header: Title + View All Link -->
            <h2 class="text-3xl font-bold text-neutral-800 text-center">Most Popular Brands</h2>
            <div class="flex flex-col md:flex-row justify-end items-center mb-10">
                <a href="/brands"
                    class="mt-4 md:mt-0 text-primary-600 hover:underline flex items-center gap-1 text-sm font-medium">
                    View All Brands
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Brand Logos -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
                @foreach ($brands as $brand)
                    <img src="{{ storage_url($brand->image) }}" alt="{{ $brand->name }}"
                        class="mx-auto transition-transform hover:scale-105" />
                @endforeach
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="bg-primary-100 rounded-xl p-8 mb-16 max-w-7xl mx-auto">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-2xl font-bold text-neutral-900 mb-2">Subscribe to Our Newsletter</h2>
            <p class="text-neutral-600 mb-6">Stay updated with our latest products and exclusive offers.</p>
            <form class="flex flex-col sm:flex-row gap-2 max-w-md mx-auto">
                <input type="email" placeholder="Your email address"
                    class="flex-grow px-4 py-2 rounded-lg border border-neutral-300 focus:outline-none focus:ring-2 focus:ring-primary-500">
                <button type="submit"
                    class="bg-primary-600 hover:bg-primary-700 text-white px-6 py-2 rounded-lg font-medium transition-colors">
                    Subscribe
                </button>
            </form>
        </div>
    </section>
@endsection
