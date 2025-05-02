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
                <div class="slider-controls flex items-center gap-4">
                    <button id="prev-slide"
                        class="p-2 rounded-full bg-white shadow hover:bg-neutral-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-neutral-700" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <span id="pagination-counter" class="text-sm font-medium text-neutral-600">1 / 20</span>
                    <button id="next-slide"
                        class="p-2 rounded-full bg-white shadow hover:bg-neutral-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-neutral-700" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Swiper container -->
            <div class="swiper-container product-slider">
                <div class="swiper-wrapper mb-12 mt-8">
                    @php
                        $colors = [
                            '#4F46E5',
                            '#10B981',
                            '#F59E0B',
                            '#EF4444',
                            '#8B5CF6',
                            '#EC4899',
                            '#14B8A6',
                            '#F97316',
                        ];
                        $products = [
                            ['name' => 'Premium Headphones', 'price' => 249.99],
                            ['name' => 'Wireless Speaker', 'price' => 129.99],
                            ['name' => 'Smart Watch', 'price' => 199.99],
                            ['name' => 'Fitness Tracker', 'price' => 89.99],
                            ['name' => 'Bluetooth Earbuds', 'price' => 159.99],
                            ['name' => 'Laptop Stand', 'price' => 49.99],
                            ['name' => 'Phone Gimbal', 'price' => 119.99],
                            ['name' => 'Desk Lamp', 'price' => 69.99],
                            ['name' => 'Mechanical Keyboard', 'price' => 179.99],
                            ['name' => 'Wireless Mouse', 'price' => 59.99],
                            ['name' => 'USB-C Hub', 'price' => 39.99],
                            ['name' => 'External SSD', 'price' => 129.99],
                            ['name' => 'Portable Power Bank', 'price' => 49.99],
                            ['name' => 'Noise Cancelling Earbuds', 'price' => 179.99],
                            ['name' => 'Smart Light Bulb', 'price' => 29.99],
                            ['name' => 'Bluetooth Speaker', 'price' => 89.99],
                            ['name' => 'Wireless Charger', 'price' => 44.99],
                            ['name' => 'Gaming Controller', 'price' => 69.99],
                            ['name' => 'Camera Drone', 'price' => 299.99],
                            ['name' => 'Smart Thermostat', 'price' => 149.99],
                        ];
                    @endphp

                    @foreach ($products as $index => $product)
                        <div class="swiper-slide px-2 sm:px-4">
                            <div
                                class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1 h-full flex flex-col">
                                <div class="w-full h-48 relative flex items-center justify-center"
                                    style="background: linear-gradient(135deg, {{ $colors[$index % 8] }} 0%, {{ $colors[($index + 1) % 8] }} 100%);">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white opacity-75"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                    </svg>

                                </div>
                                <div class="p-6 flex-grow flex flex-col justify-between">
                                    <div>
                                        <h3 class="text-xl font-semibold text-neutral-800">{{ $product['name'] }}</h3>
                                        <p class="mt-2 text-neutral-600 text-sm">High-quality product with premium features
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <span
                                            class="text-lg font-bold text-indigo-600">${{ number_format($product['price'], 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Bottom Navigation Buttons with Transition -->
                <div class="swiper-pagination bottom-buttons flex justify-center"></div>
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
    <section class="py-12 max-w-7xl mx-auto">
        <!-- Electronics Category -->
        <div id="electronics" class="mb-16">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-neutral-900 flex items-center">
                    <i class="fas fa-laptop-code mr-2 text-primary-600"></i>
                    Electronics
                </h2>
                <a href="#" class="text-primary-600 hover:text-primary-800 font-medium flex items-center">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Wireless+Earbuds" alt="Wireless Earbuds"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                            20% OFF
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Wireless Earbuds</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-neutral-500 ml-1">(4.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$59.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Smart+Watch" alt="Smart Watch"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">
                            NEW
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Smart Watch</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$129.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Bluetooth+Speaker"
                            alt="Bluetooth Speaker" class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Bluetooth Speaker</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-neutral-500 ml-1">(5.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$79.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Wireless+Charger" alt="Wireless Charger"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded">
                            POPULAR
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Wireless Charger</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(3.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$39.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Tablet" alt="Tablet"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">10" Tablet</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$199.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Wireless+Earbuds" alt="Wireless Earbuds"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                            20% OFF
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Wireless Earbuds</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-neutral-500 ml-1">(4.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$59.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Smart+Watch" alt="Smart Watch"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">
                            NEW
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Smart Watch</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$129.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Bluetooth+Speaker"
                            alt="Bluetooth Speaker" class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Bluetooth Speaker</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-neutral-500 ml-1">(5.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$79.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Wireless+Charger" alt="Wireless Charger"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded">
                            POPULAR
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Wireless Charger</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(3.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$39.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Tablet" alt="Tablet"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">10" Tablet</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$199.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fashion Category -->
        <div id="fashion" class="mb-16">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-neutral-900 flex items-center">
                    <i class="fas fa-tshirt mr-2 text-primary-600"></i>
                    Fashion
                </h2>
                <a href="#" class="text-primary-600 hover:text-primary-800 font-medium flex items-center">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Men's+Jacket" alt="Men's Jacket"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                            30% OFF
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Men's Jacket</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$89.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Women's+Dress" alt="Women's Dress"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Women's Dress</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-neutral-500 ml-1">(4.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$69.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Sneakers" alt="Sneakers"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">
                            NEW
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Sneakers</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-neutral-500 ml-1">(5.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$119.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Backpack" alt="Backpack"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Backpack</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$49.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Watch" alt="Watch"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded">
                            POPULAR
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Luxury Watch</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-neutral-500 ml-1">(4.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$199.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Men's+Jacket" alt="Men's Jacket"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                            30% OFF
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Men's Jacket</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$89.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Women's+Dress" alt="Women's Dress"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Women's Dress</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-neutral-500 ml-1">(4.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$69.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Sneakers" alt="Sneakers"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">
                            NEW
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Sneakers</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-neutral-500 ml-1">(5.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$119.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Backpack" alt="Backpack"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Backpack</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$49.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Watch" alt="Watch"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-blue-500 text-white text-xs font-bold px-2 py-1 rounded">
                            POPULAR
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Luxury Watch</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-neutral-500 ml-1">(4.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$199.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Home Decor Category -->
        <div id="home-decor" class="mb-16">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-neutral-900 flex items-center">
                    <i class="fas fa-couch mr-2 text-primary-600"></i>
                    Home Decor
                </h2>
                <a href="#" class="text-primary-600 hover:text-primary-800 font-medium flex items-center">
                    View All <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Table+Lamp" alt="Table Lamp"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Table Lamp</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$59.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Wall+Art" alt="Wall Art"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                            15% OFF
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Wall Art</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-neutral-500 ml-1">(4.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$79.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Throw+Pillows" alt="Throw Pillows"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Throw Pillows (Set of 2)</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$39.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Vase" alt="Vase"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">
                            NEW
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Ceramic Vase</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-neutral-500 ml-1">(5.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$49.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Area+Rug" alt="Area Rug"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Area Rug</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(3.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$129.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Table+Lamp" alt="Table Lamp"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Table Lamp</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$59.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Wall+Art" alt="Wall Art"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                            15% OFF
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Wall Art</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="text-neutral-500 ml-1">(4.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$79.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Throw+Pillows" alt="Throw Pillows"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Throw Pillows (Set of 2)</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(4.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$39.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Vase" alt="Vase"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">
                            NEW
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Ceramic Vase</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span class="text-neutral-500 ml-1">(5.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$49.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative">
                        <img src="https://placehold.co/300x300/e2e8f0/1e293b?text=Area+Rug" alt="Area Rug"
                            class="w-full h-48 object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="text-sm font-semibold text-neutral-900 mb-1">Area Rug</h3>
                        <div class="flex text-yellow-400 text-xs mb-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span class="text-neutral-500 ml-1">(3.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary-600 font-bold">$129.99</span>
                            <button class="text-xs bg-primary-600 hover:bg-primary-700 text-white px-2 py-1 rounded">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Banners -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @php
            $banners = [
                [
                    'id' => 'beauty',
                    'title' => 'Beauty & Personal Care',
                    'description' => 'Discover premium skincare, makeup, and personal care products.',
                    'image' => 'https://placehold.co/800x400/e2e8f0/1e293b?text=Beauty+%26+Personal+Care',
                ],
                [
                    'id' => 'sports',
                    'title' => 'Sports & Outdoors',
                    'description' => 'Gear up for your next adventure with our quality sports equipment.',
                    'image' => 'https://placehold.co/800x400/e2e8f0/1e293b?text=Sports+%26+Outdoors',
                ],
            ];
        @endphp

        @foreach ($banners as $banner)
            <div id="{{ $banner['id'] }}"
                class="relative group rounded-2xl overflow-hidden shadow-xl h-64 transition-transform duration-300 hover:scale-105">

                <img src="{{ $banner['image'] }}" alt="{{ $banner['title'] }}"
                    class="w-full h-full object-cover transition-opacity duration-500 group-hover:opacity-90" />

                <div
                    class="absolute inset-0 bg-gradient-to-br from-primary-900/70 to-primary-700/50 flex flex-col justify-center px-8 backdrop-blur-sm">
                    <h3 class="text-white text-2xl md:text-3xl font-bold mb-2 drop-shadow-lg">{{ $banner['title'] }}</h3>
                    <p class="text-white text-sm md:text-base mb-4 max-w-xs drop-shadow-sm">{{ $banner['description'] }}
                    </p>
                    <a href="#"
                        class="bg-white text-primary-700 hover:bg-neutral-100 px-4 py-2 rounded-lg text-sm font-medium inline-block w-max transition">
                        Shop Now
                    </a>
                </div>
            </div>
        @endforeach
    </section>

    <!-- Our Brand Partners -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-neutral-800 text-center mb-10">Our Brand Partners</h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center justify-center">
                <img src="https://placehold.co/140x80?text=Brand+1" alt="Brand 1"
                    class="mx-auto neutralscale hover:neutralscale-0 transition">
                <img src="https://placehold.co/140x80?text=Brand+2" alt="Brand 2"
                    class="mx-auto neutralscale hover:neutralscale-0 transition">
                <img src="https://placehold.co/140x80?text=Brand+3" alt="Brand 3"
                    class="mx-auto neutralscale hover:neutralscale-0 transition">
                <img src="https://placehold.co/140x80?text=Brand+4" alt="Brand 4"
                    class="mx-auto neutralscale hover:neutralscale-0 transition">
                <img src="https://placehold.co/140x80?text=Brand+5" alt="Brand 5"
                    class="mx-auto neutralscale hover:neutralscale-0 transition">
                <img src="https://placehold.co/140x80?text=Brand+6" alt="Brand 6"
                    class="mx-auto neutralscale hover:neutralscale-0 transition">
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
