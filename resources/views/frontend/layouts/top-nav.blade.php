<header class="bg-neutral-900 text-white shadow-md">
    <div class="container mx-auto flex items-center justify-between py-4 px-4 md:px-6">
        <!-- Mobile Menu Toggle -->
        <div class="lg:hidden">
            <label for="mobile-drawer"
                class="btn btn-ghost btn-circle drawer-button text-white hover:bg-primary-100 hover:text-neutral-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </label>
        </div>

        <!-- Shop Brand -->
        <div class="flex items-center mx-auto lg:mx-0">
            <a href="/"
                class="text-2xl font-bold tracking-tight text-primary-500 hover:text-primary-400 transition-colors">
                ShopSphere
            </a>
        </div>

        <!-- Search Bar (Desktop) -->
        <div class="hidden lg:flex flex-1 mx-4 max-w-lg">
            <div class="form-control relative w-full">
                <input type="text" placeholder="What are you looking for?"
                    class="input input-bordered w-full bg-white text-neutral-900 placeholder-neutral-600 rounded-full pl-12 pr-4 py-3 focus:ring-2 focus:ring-primary-500 focus:border-transparent focus:outline-none transition-all duration-200 shadow-sm hover:shadow-md" />
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 absolute left-4 top-1/2 transform -translate-y-1/2 text-neutral-600" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <!-- Right Side Actions -->
        <div class="flex items-center gap-3 md:gap-6">
            <!-- Mobile Search Toggle -->
            <div class="relative md:hidden">
                <button id="mobile-search-toggle"
                    class="btn btn-ghost btn-circle text-white hover:bg-primary-100 hover:text-neutral-900 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>

                <!-- Full-width search box below header -->
                <div id="mobile-search-box" class="fixed top-[64px] left-0 w-full bg-white shadow-lg p-4 hidden z-50">
                    <input type="text" placeholder="Search products..."
                        class="input input-bordered w-full text-neutral placeholder-neutral-500" />
                </div>
            </div>

            <!-- Cart Drawer -->
            <div class="drawer drawer-end z-50">
                <input id="cart-drawer" type="checkbox" class="drawer-toggle" />

                <!-- Trigger / Content Area -->
                <div class="drawer-content">
                    <!-- Button to open drawer -->
                    <label for="cart-drawer"
                        class="btn btn-ghost btn-circle hover:bg-primary-100 transition-colors text-white hover:text-neutral-900 cursor-pointer">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                            <span class="badge badge-sm bg-primary-500 text-white indicator-item">3</span>
                        </div>
                    </label>
                </div>

                <!-- Drawer Side (MUST be sibling of drawer-content) -->
                @include('frontend.includes.cart-offcanvas')
            </div>


            <!-- Wishlist -->
            <button
                class="btn btn-ghost btn-circle hover:bg-primary-100 transition-colors text-white hover:text-neutral-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Drawer -->
<div class="drawer lg:hidden">
    <input id="mobile-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-side z-30">
        <label for="mobile-drawer" class="drawer-overlay"></label>
        <div class="menu p-4 w-80 h-full bg-white text-neutral-900 relative">
            <!-- Close Drawer -->
            <label for="mobile-drawer"
                class="absolute top-4 right-4 text-neutral-600 hover:text-neutral cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </label>

            <!-- Categories -->
            <div class="space-y-2 mt-10">
                @foreach (nav_categories() as $category)
                    <details class="group">
                        <summary class="flex items-center justify-between p-2 font-medium cursor-pointer">
                            <span>{{ strtoupper($category->name) }}</span>
                            <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        @if ($category->subcategories)
                            <div class="ml-4 mt-2 space-y-2">
                                @foreach ($category->subcategories as $subcategory)
                                    <a href="#"
                                        class="block p-2 hover:bg-primary-100 rounded">{{ strtoupper($subcategory->name) }}</a>
                                @endforeach
                            </div>
                        @endif
                    </details>
                @endforeach
            </div>
        </div>
    </div>
</div>
