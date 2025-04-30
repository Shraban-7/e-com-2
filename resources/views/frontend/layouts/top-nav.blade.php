 <header class="bg-neutral text-neutral-content shadow-md">
     <div class="container mx-auto flex items-center justify-between py-4 px-4 md:px-6">
         <!-- Mobile Menu Toggle (Left Side) -->
         <div class="lg:hidden">
             <label for="mobile-drawer" class="btn btn-ghost btn-circle drawer-button">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M4 6h16M4 12h16M4 18h16" />
                 </svg>
             </label>
         </div>

         <!-- Shop Brand (Center) -->
         <div class="flex items-center mx-auto lg:mx-0">
             <a href="/"
                 class="text-2xl font-bold tracking-tight text-primary hover:text-primary-focus transition-colors">
                 ShopSphere
             </a>
         </div>

         <!-- Search Bar (Desktop Only) -->
         <div class="hidden lg:flex flex-1 mx-4 max-w-lg">
             <div class="form-control relative w-full">
                 <input type="text" placeholder="What are you looking for?"
                     class="input input-bordered w-full bg-base-100 text-base-content placeholder-base-content/80 rounded-full pl-12 pr-4 py-3 focus:ring-2 focus:ring-primary focus:border-transparent focus:outline-none transition-all duration-200 shadow-sm hover:shadow-md"
                     aria-label="Search products" />
                 <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6 absolute left-4 top-1/2 transform -translate-y-1/2 text-base-content/70"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                 </svg>
             </div>
         </div>

         <!-- Actions (Right Side) -->
         <div class="flex items-center gap-3 md:gap-6">
             <!-- Search Icon (Mobile Only) -->
             <button
                 class="btn btn-ghost btn-circle md:hidden text-neutral-content hover:bg-neutral-focus transition-colors">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                 </svg>
             </button>

             <!-- Cart -->
             <button class="btn btn-ghost btn-circle hover:bg-neutral-focus transition-colors text-neutral-content">
                 <div class="indicator">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                     </svg>
                     <span class="badge badge-sm badge-primary indicator-item">3</span>
                 </div>
             </button>

             <!-- Wishlist -->
             <button class="btn btn-ghost btn-circle hover:bg-neutral-focus transition-colors text-neutral-content">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                 </svg>
             </button>
         </div>
     </div>
 </header>

 <!-- Mobile Drawer for Categories -->
 <div class="drawer lg:hidden">
     <input id="mobile-drawer" type="checkbox" class="drawer-toggle" />
     <div class="drawer-side z-30">
         <label for="mobile-drawer" class="drawer-overlay"></label>
         <div class="menu p-4 w-80 h-full bg-base-100 text-base-content">
             <!-- Search Bar in Mobile Menu -->
             <div class="form-control relative mb-6">
                 <input type="text" placeholder="Search products..."
                     class="input input-bordered w-full bg-base-200 text-base-content rounded-full pl-10 focus:outline-none"
                     aria-label="Search products" />
                 <svg xmlns="http://www.w3.org/2000/svg"
                     class="h-5 w-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-base-content/70"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                 </svg>
             </div>

             <!-- Categories -->
             <div class="space-y-2">
                 <!-- Electronics -->
                 <details class="group">
                     <summary class="flex items-center justify-between p-2 font-medium cursor-pointer">
                         <span>Electronics</span>
                         <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                         </svg>
                     </summary>
                     <div class="ml-4 mt-2 space-y-2">
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Smartphones</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Laptops</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Televisions</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Headphones</a>
                     </div>
                 </details>

                 <!-- Fashion -->
                 <details class="group">
                     <summary class="flex items-center justify-between p-2 font-medium cursor-pointer">
                         <span>Fashion</span>
                         <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M19 9l-7 7-7-7" />
                         </svg>
                     </summary>
                     <div class="ml-4 mt-2 space-y-2">
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Men's Clothing</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Women's Clothing</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Footwear</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Accessories</a>
                     </div>
                 </details>

                 <!-- Home & Living -->
                 <details class="group">
                     <summary class="flex items-center justify-between p-2 font-medium cursor-pointer">
                         <span>Home & Living</span>
                         <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M19 9l-7 7-7-7" />
                         </svg>
                     </summary>
                     <div class="ml-4 mt-2 space-y-2">
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Furniture</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Home Decor</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Kitchenware</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Bedding</a>
                     </div>
                 </details>

                 <!-- Sports -->
                 <details class="group">
                     <summary class="flex items-center justify-between p-2 font-medium cursor-pointer">
                         <span>Sports</span>
                         <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M19 9l-7 7-7-7" />
                         </svg>
                     </summary>
                     <div class="ml-4 mt-2 space-y-2">
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Fitness Equipment</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Team Sports</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Outdoor Sports</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Cycling</a>
                     </div>
                 </details>

                 <!-- Beauty -->
                 <details class="group">
                     <summary class="flex items-center justify-between p-2 font-medium cursor-pointer">
                         <span>Beauty</span>
                         <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none"
                             stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                 d="M19 9l-7 7-7-7" />
                         </svg>
                     </summary>
                     <div class="ml-4 mt-2 space-y-2">
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Skincare</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Makeup</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Hair Care</a>
                         <a href="#" class="block p-2 hover:bg-primary/10 rounded">Fragrances</a>
                     </div>
                 </details>
             </div>
         </div>
     </div>
 </div>
