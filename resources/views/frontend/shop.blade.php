@extends('frontend.layouts.app')

@section('contents')

    @php
        $categories = ['Clothing', 'Electronics', 'Beauty'];
        $subcategories = ['T-Shirts', 'Laptops', 'Skincare'];
        $brands = ['Nike', 'Apple', 'Dove'];

        $products = [
            ['name' => 'Nike Running Shoes', 'category' => 'Clothing', 'price' => 120, 'rating' => 4],
            ['name' => 'Apple MacBook Pro', 'category' => 'Electronics', 'price' => 1999, 'rating' => 5],
            ['name' => 'Dove Body Wash', 'category' => 'Beauty', 'price' => 15, 'rating' => 3],
            ['name' => 'Nike Hoodie', 'category' => 'Clothing', 'price' => 65, 'rating' => 4],
            ['name' => 'Apple iPhone 14', 'category' => 'Electronics', 'price' => 999, 'rating' => 5],
            ['name' => 'Dove Face Cream', 'category' => 'Beauty', 'price' => 22, 'rating' => 3],
            ['name' => 'Nike Shorts', 'category' => 'Clothing', 'price' => 45, 'rating' => 4],
            ['name' => 'Apple AirPods', 'category' => 'Electronics', 'price' => 199, 'rating' => 4],
            ['name' => 'Dove Hair Oil', 'category' => 'Beauty', 'price' => 10, 'rating' => 2],
            ['name' => 'Nike Slides', 'category' => 'Clothing', 'price' => 35, 'rating' => 4],
            ['name' => 'Apple Watch SE', 'category' => 'Electronics', 'price' => 279, 'rating' => 5],
            ['name' => 'Dove Shampoo', 'category' => 'Beauty', 'price' => 18, 'rating' => 3],
        ];
    @endphp

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
                        <a href="#" class="hover:text-butterfly-blue">Shop</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Shop Page -->
    <main class="max-w-7xl mx-auto px-4 py-6 md:py-10">
        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Sidebar Filters - Desktop Version -->
            <!-- Sidebar Filters - Desktop Version -->
            <aside class="hidden lg:block w-72 bg-white border border-gray-200 rounded-xl p-6 shadow-sm h-fit sticky top-4">
                <h2 class="text-2xl font-bold text-primary-800 mb-6">Filters</h2>
                <div class="space-y-8">
                    <!-- Categories -->
                    <div>
                        <h3 class="font-semibold text-primary-700 mb-3">Categories</h3>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="checkbox checkbox-sm">
                                    <span>Clothing</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="checkbox checkbox-sm">
                                    <span>Electronics</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="checkbox checkbox-sm">
                                    <span>Beauty</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <!-- Subcategories -->
                    <div>
                        <h3 class="font-semibold text-primary-700 mb-3">Subcategories</h3>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="checkbox checkbox-sm">
                                    <span>T-Shirts</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="checkbox checkbox-sm">
                                    <span>Laptops</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="checkbox checkbox-sm">
                                    <span>Skincare</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <!-- Brands -->
                    <div>
                        <h3 class="font-semibold text-primary-700 mb-3">Brands</h3>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="checkbox checkbox-sm">
                                    <span>Nike</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="checkbox checkbox-sm">
                                    <span>Apple</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="checkbox" class="checkbox checkbox-sm">
                                    <span>Dove</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <!-- Price Range -->
                    <div>
                        <h3 class="font-semibold text-primary-700 mb-3">Price Range</h3>
                        <input type="range" min="0" max="2000" step="50"
                            class="w-full accent-primary-600 mb-2">
                        <div class="flex justify-between text-sm text-gray-500 mb-2">
                            <span>$0</span><span>$2000</span>
                        </div>
                        <div class="flex gap-2">
                            <input type="number" class="input input-sm input-bordered w-1/2" placeholder="Min">
                            <input type="number" class="input input-sm input-bordered w-1/2" placeholder="Max">
                        </div>
                    </div>

                    <!-- Ratings -->
                    <div>
                        <h3 class="font-semibold text-primary-700 mb-3">Ratings</h3>
                        <label class="flex items-center gap-2 mb-1 cursor-pointer">
                            <input type="radio" name="rating" class="radio radio-sm">
                            <div class="flex text-yellow-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                            </div>
                        </label>
                        <label class="flex items-center gap-2 mb-1 cursor-pointer">
                            <input type="radio" name="rating" class="radio radio-sm">
                            <div class="flex text-yellow-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                            </div>
                        </label>
                        <label class="flex items-center gap-2 mb-1 cursor-pointer">
                            <input type="radio" name="rating" class="radio radio-sm">
                            <div class="flex text-yellow-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                            </div>
                        </label>
                        <label class="flex items-center gap-2 mb-1 cursor-pointer">
                            <input type="radio" name="rating" class="radio radio-sm">
                            <div class="flex text-yellow-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                            </div>
                        </label>
                        <label class="flex items-center gap-2 mb-1 cursor-pointer">
                            <input type="radio" name="rating" class="radio radio-sm">
                            <div class="flex text-yellow-400">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                                <svg class="w-4 h-4 text-gray-300" viewBox="0 0 20 20">
                                    <path
                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                </svg>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Filter Button -->
                <div class="mt-8">
                    <button class="btn btn-primary w-full">Apply Filters</button>
                </div>
            </aside>

            <!-- Product Section -->
            <section class="flex-1">
                <!-- Mobile Filter Button -->
                <div class="flex justify-between items-center mb-4">
                    <button id="open-filter-btn" class="lg:hidden  btn btn-sm btn-outline flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 010 2H4a1 1 0 01-1-1zm3 4a1 1 0 011-1h10a1 1 0 010 2H7a1 1 0 01-1-1zm0 4a1 1 0 011-1h10a1 1 0 010 2H7a1 1 0 01-1-1zm0 4a1 1 0 011-1h10a1 1 0 010 2H7a1 1 0 01-1-1z" />
                        </svg>
                        Filters
                    </button>
                </div>

                <!-- Sort & Results -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                    <p class="text-sm text-gray-600">Showing <span class="font-medium text-gray-900">12</span> products
                    </p>
                    <select class="select select-sm w-full sm:w-52">
                        <option>Featured</option>
                        <option>Newest</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Highest Rated</option>
                    </select>
                </div>

                <!-- Product Grid -->
                <div
                    class="grid grid-cols-2 xs:grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-6">
                    @foreach ($products as $product)
                        <div
                            class="group relative border rounded-xl bg-white overflow-hidden shadow-sm hover:shadow-lg transition">
                            <div
                                class="h-40 bg-gray-100 flex items-center justify-center text-gray-400 group-hover:bg-gray-200">
                                <span class="text-sm">Image</span>
                            </div>
                            <div class="p-3">
                                <h3 class="font-semibold text-base text-gray-800 truncate">{{ $product['name'] }}</h3>
                                <p class="text-sm text-gray-500">{{ $product['category'] }}</p>
                                <div class="flex items-center gap-1 text-yellow-400 mt-1">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <svg class="w-4 h-4 {{ $i <= $product['rating'] ? 'fill-current' : 'text-gray-300' }}"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                        </svg>
                                    @endfor
                                </div>
                                <div class="flex items-center justify-between mt-3">
                                    <span class="text-primary-600 font-bold text-sm">${{ $product['price'] }}</span>
                                    <button class="btn btn-primary btn-xs">
                                       Add
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>

    <!-- Improved Mobile Filter Drawer (Off-canvas) -->
    <div id="filter-drawer" class="fixed inset-0 z-50 bg-opacity-50 hidden">
        <!-- Overlay for closing when clicking outside -->
        <div id="filter-overlay" class="absolute inset-0"></div>

        <!-- Drawer Content -->
        <div class="absolute inset-y-0 right-0 flex justify-end max-w-full">
            <div id="filter-panel"
                class="w-full xs:w-80 bg-white h-full p-5 transform transition-transform duration-300 ease-in-out translate-x-full overflow-y-auto">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-primary-800">Filters</h3>
                    <button id="close-filter-btn" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="space-y-6">
                    <!-- Categories -->
                    <div>
                        <h4 class="font-semibold text-primary-700 mb-3">Categories</h4>
                        <ul class="space-y-2">
                            @foreach ($categories as $cat)
                                <li>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="checkbox" class="checkbox checkbox-sm checkbox-primary">
                                        <span>{{ $cat }}</span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Subcategories -->
                    <div>
                        <h4 class="font-semibold text-primary-700 mb-3">Subcategories</h4>
                        <ul class="space-y-2">
                            @foreach ($subcategories as $sub)
                                <li>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="checkbox" class="checkbox checkbox-sm checkbox-primary">
                                        <span>{{ $sub }}</span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Brands -->
                    <div>
                        <h4 class="font-semibold text-primary-700 mb-3">Brands</h4>
                        <ul class="space-y-2">
                            @foreach ($brands as $brand)
                                <li>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="checkbox" class="checkbox checkbox-sm checkbox-primary">
                                        <span>{{ $brand }}</span>
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Price Range -->
                    <div>
                        <h4 class="font-semibold text-primary-700 mb-3">Price Range</h4>
                        <input type="range" min="0" max="2000" step="50"
                            class="w-full accent-primary-600 mb-2">
                        <div class="flex justify-between text-sm text-gray-500 mb-2">
                            <span>$0</span><span>$2000</span>
                        </div>
                        <div class="flex gap-2">
                            <input type="number" class="input input-sm input-bordered w-1/2" placeholder="Min">
                            <input type="number" class="input input-sm input-bordered w-1/2" placeholder="Max">
                        </div>
                    </div>

                    <!-- Ratings -->
                    <div>
                        <h4 class="font-semibold text-primary-700 mb-3">Ratings</h4>
                        @for ($i = 5; $i >= 1; $i--)
                            <label class="flex items-center gap-2 mb-1 cursor-pointer">
                                <input type="radio" name="rating_mobile" class="radio radio-sm radio-primary" />
                                <div class="flex text-yellow-400">
                                    @for ($j = 1; $j <= 5; $j++)
                                        <svg class="w-4 h-4 {{ $j <= $i ? 'fill-current' : 'text-gray-300' }}"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.562-.954L10 0l2.95 5.956 6.562.954-4.756 4.635L15.878 18.09z" />
                                        </svg>
                                    @endfor
                                </div>
                            </label>
                        @endfor
                    </div>
                </div>

                <!-- Filter Action Buttons -->
                <div class="flex justify-between items-center mt-8 pt-4 border-t border-gray-100">
                    <button id="reset-filters-btn" class="btn btn-sm btn-outline">Reset</button>
                    <button id="apply-filters-btn" class="btn btn-sm btn-primary">Apply Filters</button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterDrawer = document.getElementById('filter-drawer');
                const filterPanel = document.getElementById('filter-panel');
                const filterOverlay = document.getElementById('filter-overlay');
                const openFilterBtn = document.getElementById('open-filter-btn');
                const closeFilterBtn = document.getElementById('close-filter-btn');
                const applyFiltersBtn = document.getElementById('apply-filters-btn');
                const resetFiltersBtn = document.getElementById('reset-filters-btn');

                // Function to open filter drawer
                function openFilterDrawer() {
                    // First show the container
                    filterDrawer.classList.remove('hidden');

                    // Force browser reflow to ensure transition works
                    void filterPanel.offsetWidth;

                    // Then remove the transform to slide in
                    filterPanel.classList.remove('translate-x-full');

                    // Lock body scroll
                    document.body.style.overflow = 'hidden';
                }

                // Function to close filter drawer
                function closeFilterDrawer() {
                    // First add the transform to slide out
                    filterPanel.classList.add('translate-x-full');

                    // After transition completes, hide the container
                    setTimeout(() => {
                        filterDrawer.classList.add('hidden');
                        document.body.style.overflow = '';
                    }, 300);
                }

                // Event listeners
                openFilterBtn.addEventListener('click', openFilterDrawer);
                closeFilterBtn.addEventListener('click', closeFilterDrawer);
                filterOverlay.addEventListener('click', closeFilterDrawer);
                applyFiltersBtn.addEventListener('click', closeFilterDrawer);
                resetFiltersBtn.addEventListener('click', function() {
                    // Reset filters logic would go here
                    // For example, clear all checkboxes and inputs
                    const checkboxes = filterPanel.querySelectorAll('input[type="checkbox"]');
                    checkboxes.forEach(checkbox => checkbox.checked = false);

                    const radios = filterPanel.querySelectorAll('input[type="radio"]');
                    radios.forEach(radio => radio.checked = false);

                    const rangeInput = filterPanel.querySelector('input[type="range"]');
                    if (rangeInput) rangeInput.value = rangeInput.min;

                    const numberInputs = filterPanel.querySelectorAll('input[type="number"]');
                    numberInputs.forEach(input => input.value = '');
                });

                // Close with ESC key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && !filterDrawer.classList.contains('hidden')) {
                        closeFilterDrawer();
                    }
                });
            });
        </script>
    @endpush
@endsection
