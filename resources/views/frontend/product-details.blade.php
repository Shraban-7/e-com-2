@extends('frontend.layouts.app')

@section('contents')
    <!-- Breadcrumb -->
    <div class="bg-primary-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 md:px-8 py-3">
            <nav class="text-sm text-gray-600">
                <ul class="flex items-center space-x-2">
                    <li>
                        <a href="/" class="hover:text-butterfly-blue font-medium">Home</a>
                    </li>
                    <li>/</li>
                    <li>
                        <a href="#" class="hover:text-butterfly-blue">Electronics</a>
                    </li>
                    <li>/</li>
                    <li>
                        <a href="#" class="hover:text-butterfly-blue">Headphones</a>
                    </li>
                    <li>/</li>
                    <li class="text-gray-500">Premium Wireless Headphones</li>
                </ul>
            </nav>
        </div>
    </div>


    <!-- Product Detail Section -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Product Images -->
            <div class="space-y-4">
                <div class="carousel w-full rounded-lg overflow-hidden border border-primary">
                    <div id="slide1" class="carousel-item relative w-full">
                        <img src="https://placehold.co/600x400/e0f2fe/0284c7?text=Premium+Headphones" class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide4" class="btn btn-circle bg-primary-100">❮</a>
                            <a href="#slide2" class="btn btn-circle bg-primary-100">❯</a>
                        </div>
                    </div>
                    <div id="slide2" class="carousel-item relative w-full">
                        <img src="https://placehold.co/600x400/e0f2fe/0284c7?text=Side+View" class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide1" class="btn btn-circle bg-primary-100">❮</a>
                            <a href="#slide3" class="btn btn-circle bg-primary-100">❯</a>
                        </div>
                    </div>
                    <div id="slide3" class="carousel-item relative w-full">
                        <img src="https://placehold.co/600x400/e0f2fe/0284c7?text=Close+Up" class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide2" class="btn btn-circle bg-primary-100">❮</a>
                            <a href="#slide4" class="btn btn-circle bg-primary-100">❯</a>
                        </div>
                    </div>
                    <div id="slide4" class="carousel-item relative w-full">
                        <img src="https://placehold.co/600x400/e0f2fe/0284c7?text=In+Use" class="w-full" />
                        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                            <a href="#slide3" class="btn btn-circle bg-primary-100">❮</a>
                            <a href="#slide1" class="btn btn-circle bg-primary-100">❯</a>
                        </div>
                    </div>
                </div>
                <div class="flex space-x-2 overflow-auto py-2">
                    <a href="#slide1" class="w-24 h-24 border border-primary rounded-md overflow-hidden">
                        <img src="https://placehold.co/600x400/e0f2fe/0284c7?text=Thumbnail+1"
                            class="w-full h-full object-cover" />
                    </a>
                    <a href="#slide2" class="w-24 h-24 border border-primary rounded-md overflow-hidden">
                        <img src="https://placehold.co/600x400/e0f2fe/0284c7?text=Thumbnail+2"
                            class="w-full h-full object-cover" />
                    </a>
                    <a href="#slide3" class="w-24 h-24 border border-primary rounded-md overflow-hidden">
                        <img src="https://placehold.co/600x400/e0f2fe/0284c7?text=Thumbnail+3"
                            class="w-full h-full object-cover" />
                    </a>
                    <a href="#slide4" class="w-24 h-24 border border-primary rounded-md overflow-hidden">
                        <img src="https://placehold.co/600x400/e0f2fe/0284c7?text=Thumbnail+4"
                            class="w-full h-full object-cover" />
                    </a>
                </div>
            </div>

            <!-- Product Info -->
            <div class="space-y-6">
                <div>
                    <h1 class="text-3xl font-bold">Premium Wireless Headphones</h1>
                    <div class="flex items-center mt-2">
                        <div class="rating rating-sm">
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
                            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
                        </div>
                        <span class="text-sm ml-2">4.0 (128 reviews)</span>
                    </div>
                </div>

                <div class="flex items-center">
                    <span class="text-3xl font-bold text-primary">$199.99</span>
                    <span class="ml-2 text-lg line-through text-gray-500">$249.99</span>
                    <span class="ml-2 badge badge-success">20% OFF</span>
                </div>

                <div>
                    <p class="text-gray-700">
                        Experience premium sound quality with our wireless headphones. Featuring active noise cancellation,
                        30-hour battery life, and comfortable over-ear design. Perfect for music lovers, gamers, and
                        professionals.
                    </p>
                </div>

                <div class="divider"></div>

                <!-- Color Selection -->
                <div>
                    <h3 class="font-semibold mb-2">Color</h3>
                    <div class="flex space-x-2">
                        <div class="w-8 h-8 rounded-full bg-black cursor-pointer border-2 border-gray-300"></div>
                        <div class="w-8 h-8 rounded-full bg-white cursor-pointer border-2 border-gray-300"></div>
                        <div class="w-8 h-8 rounded-full bg-blue-500 cursor-pointer border-2 border-primary"></div>
                        <div class="w-8 h-8 rounded-full bg-red-500 cursor-pointer border-2 border-gray-300"></div>
                    </div>
                </div>

                <!-- Quantity -->
                <div>
                    <h3 class="font-semibold mb-2">Quantity</h3>
                    <div class="flex items-center">
                        <button class="btn btn-sm btn-outline">-</button>
                        <input type="text" value="1" class="input input-bordered w-16 mx-2 text-center" />
                        <button class="btn btn-sm btn-outline">+</button>
                        <span class="ml-4 text-sm text-gray-500">Only 12 items left</span>
                    </div>
                </div>

                <!-- Add to Cart -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button class="btn btn-primary flex-1">Add to Cart</button>
                    <button class="btn btn-outline flex-1">Buy Now</button>
                    <button class="btn btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </button>
                </div>

                <!-- Delivery Info -->
                <div class="bg-primary-50 p-4 rounded-lg">
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                        <div class="ml-2">
                            <p class="font-semibold">Free Delivery</p>
                            <p class="text-sm text-gray-600">Enter your postal code for delivery availability</p>
                        </div>
                    </div>
                    <div class="flex items-start mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mt-0.5 text-primary" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        <div class="ml-2">
                            <p class="font-semibold">Return Policy</p>
                            <p class="text-sm text-gray-600">Free 30-day returns. See details</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="mt-12">
            <div class="tabs tabs-boxed bg-primary-50">
                <a class="tab tab-active">Description</a>
                <a class="tab">Specifications</a>
                <a class="tab">Reviews (128)</a>
                <a class="tab">FAQs</a>
            </div>
            <div class="p-6 bg-white border border-primary-100 rounded-b-lg">
                <h3 class="text-xl font-bold mb-4">Product Description</h3>
                <p class="mb-4">
                    Introducing our Premium Wireless Headphones, designed for audiophiles and casual listeners alike.
                    These headphones deliver exceptional sound quality with deep bass and crystal-clear highs.
                </p>
                <p class="mb-4">
                    The active noise cancellation technology blocks out ambient noise, allowing you to focus on your music,
                    calls, or work without distractions. With a comfortable over-ear design and premium materials,
                    you can wear these headphones all day without discomfort.
                </p>
                <h4 class="text-lg font-semibold mt-6 mb-2">Key Features:</h4>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Active Noise Cancellation</li>
                    <li>30-hour battery life</li>
                    <li>Bluetooth 5.2 connectivity</li>
                    <li>Built-in microphone for calls</li>
                    <li>Comfortable memory foam ear cushions</li>
                    <li>Foldable design for easy storage</li>
                    <li>Compatible with voice assistants</li>
                    <li>Quick charge: 5 minutes for 3 hours of playback</li>
                </ul>
            </div>
        </div>

        <!-- Related Products -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold mb-6">You May Also Like</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://placehold.co/300x200/e0f2fe/0284c7?text=Earbuds" alt="Earbuds" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Wireless Earbuds</h2>
                        <div class="flex items-center">
                            <div class="rating rating-sm">
                                <input type="radio" name="rating-id-1" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-1" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-1" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-1" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-1" class="mask mask-star-2 bg-orange-400"
                                    checked />
                            </div>
                            <span class="text-xs ml-1">(95)</span>
                        </div>
                        <p class="text-lg font-bold text-primary">$89.99</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">Add to cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://placehold.co/300x200/e0f2fe/0284c7?text=Speaker" alt="Speaker" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Bluetooth Speaker</h2>
                        <div class="flex items-center">
                            <div class="rating rating-sm">
                                <input type="radio" name="rating-id-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-2" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-2" class="mask mask-star-2 bg-orange-400"
                                    checked />
                                <input type="radio" name="rating-id-2" class="mask mask-star-2 bg-orange-400" />
                            </div>
                            <span class="text-xs ml-1">(42)</span>
                        </div>
                        <p class="text-lg font-bold text-primary">$129.99</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">Add to cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://placehold.co/300x200/e0f2fe/0284c7?text=Headset" alt="Headset" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Gaming Headset</h2>
                        <div class="flex items-center">
                            <div class="rating rating-sm">
                                <input type="radio" name="rating-id-3" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-3" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-3" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-3" class="mask mask-star-2 bg-orange-400"
                                    checked />
                                <input type="radio" name="rating-id-3" class="mask mask-star-2 bg-orange-400" />
                            </div>
                            <span class="text-xs ml-1">(78)</span>
                        </div>
                        <p class="text-lg font-bold text-primary">$149.99</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">Add to cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://placehold.co/300x200/e0f2fe/0284c7?text=Charger" alt="Charger" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Wireless Charger</h2>
                        <div class="flex items-center">
                            <div class="rating rating-sm">
                                <input type="radio" name="rating-id-4" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-4" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-4" class="mask mask-star-2 bg-orange-400"
                                    checked />
                                <input type="radio" name="rating-id-4" class="mask mask-star-2 bg-orange-400" />
                                <input type="radio" name="rating-id-4" class="mask mask-star-2 bg-orange-400" />
                            </div>
                            <span class="text-xs ml-1">(36)</span>
                        </div>
                        <p class="text-lg font-bold text-primary">$49.99</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recently Viewed -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold mb-6">Recently Viewed</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://placehold.co/300x200/e0f2fe/0284c7?text=Smartwatch" alt="Smartwatch" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Smartwatch Pro</h2>
                        <p class="text-lg font-bold text-primary">$199.99</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">View details</button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://placehold.co/300x200/e0f2fe/0284c7?text=Camera" alt="Camera" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Digital Camera</h2>
                        <p class="text-lg font-bold text-primary">$349.99</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">View details</button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://placehold.co/300x200/e0f2fe/0284c7?text=Tablet" alt="Tablet" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">Tablet 10.5"</h2>
                        <p class="text-lg font-bold text-primary">$299.99</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">View details</button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://placehold.co/300x200/e0f2fe/0284c7?text=Powerbank" alt="Powerbank" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Portable Powerbank</h2>
                        <p class="text-lg font-bold text-primary">$79.99</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">View details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Customer Reviews Section -->
    <div class="container mx-auto px-4 py-8 mt-8">
        <h2 class="text-2xl font-bold mb-6">Customer Reviews</h2>

        <div class="flex flex-col md:flex-row gap-8">
            <!-- Review Summary -->
            <div class="md:w-1/3 bg-primary-50 p-6 rounded-lg">
                <div class="flex items-center mb-4">
                    <span class="text-4xl font-bold">4.0</span>
                    <div class="ml-4">
                        <div class="rating rating-md">
                            <input type="radio" name="rating-summary" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-summary" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-summary" class="mask mask-star-2 bg-orange-400" />
                            <input type="radio" name="rating-summary" class="mask mask-star-2 bg-orange-400" checked />
                            <input type="radio" name="rating-summary" class="mask mask-star-2 bg-orange-400" />
                        </div>
                        <p class="text-sm">Based on 128 reviews</p>
                    </div>
                </div>

                <!-- Rating Breakdown -->
                <div class="space-y-2 mt-6">
                    <div class="flex items-center">
                        <span class="w-8 text-sm">5★</span>
                        <progress class="progress progress-primary w-full" value="45" max="100"></progress>
                        <span class="w-8 text-sm text-right">45%</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-8 text-sm">4★</span>
                        <progress class="progress progress-primary w-full" value="30" max="100"></progress>
                        <span class="w-8 text-sm text-right">30%</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-8 text-sm">3★</span>
                        <progress class="progress progress-primary w-full" value="15" max="100"></progress>
                        <span class="w-8 text-sm text-right">15%</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-8 text-sm">2★</span>
                        <progress class="progress progress-primary w-full" value="7" max="100"></progress>
                        <span class="w-8 text-sm text-right">7%</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-8 text-sm">1★</span>
                        <progress class="progress progress-primary w-full" value="3" max="100"></progress>
                        <span class="w-8 text-sm text-right">3%</span>
                    </div>
                </div>

                <button class="btn btn-primary w-full mt-6">Write a Review</button>
            </div>

            <!-- Review List -->
            <div class="md:w-2/3">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold">128 Reviews</h3>
                    <select class="select select-bordered select-sm">
                        <option selected>Most Recent</option>
                        <option>Highest Rated</option>
                        <option>Lowest Rated</option>
                        <option>Most Helpful</option>
                    </select>
                </div>

                <!-- Individual Reviews -->
                <div class="space-y-6">
                    <!-- Review 1 -->
                    <div class="card bg-base-100 shadow-sm border border-primary-100">
                        <div class="card-body">
                            <div class="flex justify-between">
                                <div>
                                    <h4 class="font-bold">Great sound quality!</h4>
                                    <div class="rating rating-sm mt-1">
                                        <input type="radio" name="rating-r1" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-r1" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-r1" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-r1" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-r1" class="mask mask-star-2 bg-orange-400"
                                            checked />
                                    </div>
                                </div>
                                <span class="text-sm text-gray-500">2 days ago</span>
                            </div>
                            <p class="mt-2">These headphones exceeded my expectations. The sound quality is amazing, and
                                the noise cancellation works perfectly. Battery life is impressive too - I've been using
                                them for a week without needing to recharge.</p>
                            <div class="flex items-center mt-4 text-sm text-gray-500">
                                <div class="flex items-center">
                                    <span>John D.</span>
                                    <span class="badge badge-sm ml-2">Verified Purchase</span>
                                </div>
                                <div class="flex items-center ml-auto">
                                    <button class="btn btn-ghost btn-xs">Helpful (24)</button>
                                    <button class="btn btn-ghost btn-xs">Report</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="card bg-base-100 shadow-sm border border-primary-100">
                        <div class="card-body">
                            <div class="flex justify-between">
                                <div>
                                    <h4 class="font-bold">Comfortable but battery issues</h4>
                                    <div class="rating rating-sm mt-1">
                                        <input type="radio" name="rating-r2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-r2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-r2" class="mask mask-star-2 bg-orange-400"
                                            checked />
                                        <input type="radio" name="rating-r2" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-r2" class="mask mask-star-2 bg-orange-400" />
                                    </div>
                                </div>
                                <span class="text-sm text-gray-500">1 week ago</span>
                            </div>
                            <p class="mt-2">The headphones are very comfortable and the sound quality is good. However,
                                the battery doesn't last as long as advertised. I'm only getting about 20 hours instead of
                                the promised 30 hours.</p>
                            <div class="flex items-center mt-4 text-sm text-gray-500">
                                <div class="flex items-center">
                                    <span>Sarah M.</span>
                                    <span class="badge badge-sm ml-2">Verified Purchase</span>
                                </div>
                                <div class="flex items-center ml-auto">
                                    <button class="btn btn-ghost btn-xs">Helpful (12)</button>
                                    <button class="btn btn-ghost btn-xs">Report</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="card bg-base-100 shadow-sm border border-primary-100">
                        <div class="card-body">
                            <div class="flex justify-between">
                                <div>
                                    <h4 class="font-bold">Perfect for work calls</h4>
                                    <div class="rating rating-sm mt-1">
                                        <input type="radio" name="rating-r3" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-r3" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-r3" class="mask mask-star-2 bg-orange-400" />
                                        <input type="radio" name="rating-r3" class="mask mask-star-2 bg-orange-400"
                                            checked />
                                        <input type="radio" name="rating-r3" class="mask mask-star-2 bg-orange-400" />
                                    </div>
                                </div>
                                <span class="text-sm text-gray-500">2 weeks ago</span>
                            </div>
                            <p class="mt-2">I bought these primarily for work calls, and they've been fantastic. The
                                microphone quality is excellent, and the noise cancellation helps me focus in noisy
                                environments. Comfortable enough to wear all day.</p>
                            <div class="flex items-center mt-4 text-sm text-gray-500">
                                <div class="flex items-center">
                                    <span>Michael T.</span>
                                    <span class="badge badge-sm ml-2">Verified Purchase</span>
                                </div>
                                <div class="flex items-center ml-auto">
                                    <button class="btn btn-ghost btn-xs">Helpful (8)</button>
                                    <button class="btn btn-ghost btn-xs">Report</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-outline w-full">Load More Reviews</button>
                </div>
            </div>
        </div>
    </div>
@endsection
