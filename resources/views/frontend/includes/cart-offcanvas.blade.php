<!-- Drawer Side -->
<div class="drawer-side z-50">
    <label for="cart-drawer" class="drawer-overlay"></label>
    <div class="menu p-4 w-full max-w-md min-h-full bg-white text-base-content flex flex-col shadow-xl">
        <!-- Header with Close Button -->
        <div class="flex justify-between items-center border-b pb-3">
            <h2 class="text-lg font-semibold text-neutral-900">Your Cart</h2>
            <label for="cart-drawer" class="cursor-pointer text-gray-400 hover:text-red-500 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </label>
        </div>

        <!-- Cart Items -->
        <div class="flex-1 overflow-y-auto mt-4 space-y-4 pr-2">
            <!-- Example Cart Item -->
            <div class="bg-white rounded-lg shadow-sm p-4 flex gap-4 items-start">
                <div class="w-20 h-20 bg-gray-200 rounded overflow-hidden">
                    <img src="/api/placeholder/80/80" alt="Product" class="w-full h-full object-cover" />
                </div>
                <div class="flex-1">
                    <div class="flex justify-between">
                        <h3 class="font-medium text-neutral-900">Wireless Headphones</h3>
                        <button class="text-gray-400 hover:text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </button>
                    </div>
                    <p class="text-gray-500 text-sm">Black | Premium</p>
                    <div class="flex justify-between items-center mt-2">
                        <div class="flex items-center border rounded-md">
                            <button class="px-2 py-1 text-gray-600 hover:bg-gray-100">−</button>
                            <span class="px-2 py-1">1</span>
                            <button class="px-2 py-1 text-gray-600 hover:bg-gray-100">+</button>
                        </div>
                        <span class="font-medium text-neutral-900">$129.99</span>
                    </div>
                </div>
            </div>

            <!-- Add more cart items here (copy block above) -->
        </div>

        <!-- Cart Summary -->
        <div class="border-t pt-4 mt-4 space-y-3">
            <div class="flex justify-between text-neutral-900">
                <span>Subtotal</span>
                <span class="font-medium">$459.97</span>
            </div>
            <div class="flex justify-between text-neutral-900">
                <span>Shipping</span>
                <span class="font-medium">Free</span>
            </div>
            <div class="flex justify-between text-neutral-900">
                <span>Tax</span>
                <span class="font-medium">$36.80</span>
            </div>
            <div class="flex justify-between text-lg font-bold text-neutral-900 border-t pt-2">
                <span>Total</span>
                <span>$496.77</span>
            </div>

            <div class="flex justify-between gap-2">
                <button
                    class="w-full bg-primary-500 hover:bg-primary-600 text-white py-3 px-4 rounded-md font-medium transition focus:outline-none focus:ring-2 focus:ring-primary-500">
                    Proceed to Checkout
                </button>

                <label for="cart-drawer"
                    class="w-full text-center bg-white border border-gray-300 text-neutral-900 py-3 px-4 rounded-md font-medium hover:bg-gray-50 cursor-pointer transition">
                    Continue Shopping
                </label>
            </div>
        </div>
    </div>
</div>
