@extends('frontend.layouts.app')

@section('contents')
    <!-- Breadcrumb -->
    <div class="bg-primary-50 border-b border-gray-200">
        <div class="max-w-7xl px-4 md:px-8 py-3">
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
        <div class="flex flex-col md:flex-row gap-5">
            <!-- Product Images Section -->
            <div class="lg:w-[55%] md:w-[50%] w-full flex flex-col lg:flex-row gap-3 lg:gap-5">
                <!-- Thumbnails -->
                <div class="lg:w-1/6 w-full space-y-3 order-2 lg:order-1">
                    <div class="single-product-thumbnails overflow-hidden xl:h-[37rem] lg:h-[41rem] h-auto">
                        <div class="swiper-wrapper">
                            @php
                                $allImages = collect([$product->thumbnail])->concat($product->images->pluck('image'));
                            @endphp

                            @foreach ($allImages as $img)
                                <div class="swiper-slide">
                                    <div
                                        class="slide-thumb w-full xl:h-24 md:h-22 lg:h-28 h-20 rounded-2xl cursor-pointer border-2 border-transparent hover:border-primary-500 overflow-hidden">
                                        <img src="{{ storage_url($img) }}" alt="{{ $product->name }}"
                                            class="w-full h-full object-cover" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Main Image Slider -->
                <div class="lg:w-5/6 w-full relative order-1 lg:order-2">
                    <div
                        class="single-product-swiper w-full h-96 md:h-[37rem] xl:h-[37rem] lg:h-[41rem] rounded-2xl overflow-hidden relative">
                        <div class="swiper-wrapper">
                            @php
                                $allImages = collect([$product->thumbnail])->concat($product->images->pluck('image'));
                            @endphp

                            @foreach ($allImages as $img)
                                <div class="swiper-slide h-full aspect-[4/3] rounded-2xl overflow-hidden">
                                    <img src="{{ storage_url($img) }}" alt="{{ $product->name }}"
                                        class="w-full h-full object-cover" />
                                </div>
                            @endforeach

                        </div>
                        <!-- Navigation Buttons -->

                        <div class="swiper-button-prev text-primary-400"></div>
                        <div class="swiper-button-next text-primary-400"></div>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="lg:w-[45%] md:w-[50%] w-full md:px-2 xl:px-3">
                <div>
                    <h1 class="text-3xl font-bold">{{ $product->name }}</h1>
                    <div class="flex items-center my-2">
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
                    <span class="text-3xl font-bold text-primary-600">$199.99</span>
                    <span class="ml-2 text-lg line-through text-gray-500">$249.99</span>
                    <span class="ml-2 badge badge-success">20% OFF</span>
                </div>

                <div>
                    <p class="text-gray-700">
                        {!! $product->description !!}
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
                    <div class="flex gap-2">
                        <!-- Add To Cart -->
                        <button
                            class="flex items-center justify-center gap-2 bg-primary-500 text-white px-6 py-2 rounded-full shadow-md hover:bg-primary-600 transition duration-300 ease-in-out text-sm">
                            <i class="fas fa-shopping-cart"></i>
                            Add To Cart
                        </button>

                        <!-- Buy Now (Outline Style) -->
                        <button
                            class="flex items-center justify-center gap-2 border border-primary-500 text-primary-500 px-6 py-2 rounded-full hover:bg-primary-50 transition duration-300 ease-in-out text-sm">
                            <i class="fas fa-bolt"></i>
                            Buy Now
                        </button>

                        <!-- Wishlist (Ghost Style) -->
                        <button
                            class="flex items-center justify-center text-primary-500 hover:text-primary-600 transition duration-200 ease-in-out p-2 rounded-full">
                            <i class="fas fa-heart text-lg"></i>
                        </button>
                    </div>

                </div>

                <!-- Delivery Info -->
                <div class="bg-primary-50 p-4 rounded-lg">
                    <!-- Free Delivery -->
                    <div class="flex items-start">
                        <i class="fas fa-truck mt-0.5 text-primary-500 text-base"></i>
                        <div class="ml-2">
                            <p class="font-semibold">Free Delivery</p>
                            <p class="text-sm text-gray-600">Enter your postal code for delivery availability</p>
                        </div>
                    </div>

                    <!-- Return Policy -->
                    <div class="flex items-start mt-3">
                        <i class="fas fa-undo-alt mt-0.5 text-primary-500 text-base"></i>
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
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                @foreach ($related_products as $product)
                    <x-product-card :product="$product" />
                @endforeach

            </div>

            <!-- Recently Viewed -->
            <div class="mt-16">
                <h2 class="text-2xl font-bold mb-6">Recently Viewed</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    @foreach ($recentlyViewedProducts as $product)
                        <x-product-card :product="$product" />
                    @endforeach
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
                                <input type="radio" name="rating-summary" class="mask mask-star-2 bg-orange-400"
                                    checked />
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
                                            <input type="radio" name="rating-r1"
                                                class="mask mask-star-2 bg-orange-400" />
                                            <input type="radio" name="rating-r1"
                                                class="mask mask-star-2 bg-orange-400" />
                                            <input type="radio" name="rating-r1"
                                                class="mask mask-star-2 bg-orange-400" />
                                            <input type="radio" name="rating-r1"
                                                class="mask mask-star-2 bg-orange-400" />
                                            <input type="radio" name="rating-r1" class="mask mask-star-2 bg-orange-400"
                                                checked />
                                        </div>
                                    </div>
                                    <span class="text-sm text-gray-500">2 days ago</span>
                                </div>
                                <p class="mt-2">These headphones exceeded my expectations. The sound quality is amazing,
                                    and
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
                                            <input type="radio" name="rating-r2"
                                                class="mask mask-star-2 bg-orange-400" />
                                            <input type="radio" name="rating-r2"
                                                class="mask mask-star-2 bg-orange-400" />
                                            <input type="radio" name="rating-r2" class="mask mask-star-2 bg-orange-400"
                                                checked />
                                            <input type="radio" name="rating-r2"
                                                class="mask mask-star-2 bg-orange-400" />
                                            <input type="radio" name="rating-r2"
                                                class="mask mask-star-2 bg-orange-400" />
                                        </div>
                                    </div>
                                    <span class="text-sm text-gray-500">1 week ago</span>
                                </div>
                                <p class="mt-2">The headphones are very comfortable and the sound quality is good.
                                    However,
                                    the battery doesn't last as long as advertised. I'm only getting about 20 hours instead
                                    of
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
                                            <input type="radio" name="rating-r3"
                                                class="mask mask-star-2 bg-orange-400" />
                                            <input type="radio" name="rating-r3"
                                                class="mask mask-star-2 bg-orange-400" />
                                            <input type="radio" name="rating-r3"
                                                class="mask mask-star-2 bg-orange-400" />
                                            <input type="radio" name="rating-r3" class="mask mask-star-2 bg-orange-400"
                                                checked />
                                            <input type="radio" name="rating-r3"
                                                class="mask mask-star-2 bg-orange-400" />
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

        @push('scripts')
            <script>
                $(document).ready(function() {
                    function updateActiveThumbnail() {
                        $('.carousel-item').each(function() {
                            if ($(this).is(':visible')) {
                                const activeIndex = $(this).data('slide');
                                $('.thumbnail').each(function() {
                                    const thumbIndex = $(this).data('thumb');
                                    if (thumbIndex == activeIndex) {
                                        $(this).addClass('border-4 border-primary');
                                    } else {
                                        $(this).removeClass('border-4 border-primary');
                                    }
                                });
                            }
                        });
                    }

                    updateActiveThumbnail();

                    $(window).on('hashchange', function() {
                        setTimeout(updateActiveThumbnail, 50);
                    });

                    setTimeout(updateActiveThumbnail, 200);
                });

                const productThumbs = new Swiper(".single-product-thumbnails", {
                    spaceBetween: 10,
                    slidesPerView: 5,
                    watchSlidesProgress: true,
                    direction: "horizontal",
                    spaceBetween: 10,
                    grabCursor: true,
                    breakpoints: {
                        1024: {
                            direction: "vertical",
                            spaceBetween: 5,
                        },
                        1280: {
                            direction: "vertical",
                            spaceBetween: 10,
                        },
                    },
                });

                // Product Images Slider
                const productSwiper = new Swiper(".single-product-swiper", {
                    spaceBetween: 10,
                    grabCursor: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    thumbs: {
                        swiper: productThumbs,
                    },
                });
            </script>
        @endpush
    @endsection
