<!-- Cart Off-Canvas -->
<div id="cart-offcanvas" class="fixed inset-0 z-50 overflow-hidden pointer-events-none">
    <!-- Backdrop -->
    <div id="cart-backdrop" class="absolute inset-0 bg-neutral-900 bg-opacity-50 opacity-0 transition-opacity duration-300"></div>

    <!-- Cart Panel -->
    <div class="absolute inset-y-0 right-0 max-w-full flex pointer-events-auto">
        <div id="cart-panel" class="w-screen max-w-md transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col bg-white shadow-xl h-full">
            <!-- Cart Header -->
            <div class="flex items-center justify-between px-4 py-6 bg-neutral-900 text-white">
                <h2 class="text-xl font-medium">Your Cart <span id="cart-count" class="ml-2 bg-primary-500 text-white text-sm py-1 px-2 rounded-full">3</span></h2>
                <button id="close-cart" class="text-white hover:text-primary-400 focus:outline-none transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Cart Content -->
            <div class="flex-1 overflow-y-auto p-4">
                <!-- Cart Items -->
                <div class="space-y-4">
                    <!-- Cart Item 1 -->
                    <div class="flex items-start border-b border-neutral-200 pb-4">
                        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-md border border-neutral-200">
                            <img src="/api/placeholder/80/80" alt="Product image" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="ml-4 flex flex-1 flex-col">
                            <div class="flex justify-between text-base font-medium text-neutral-900">
                                <h3>Premium Wireless Headphones</h3>
                                <p class="ml-4">$299.99</p>
                            </div>
                            <p class="mt-1 text-sm text-neutral-500">Black</p>
                            <div class="flex items-center justify-between text-sm mt-2">
                                <div class="flex items-center border rounded">
                                    <button class="px-2 py-1 hover:bg-neutral-100">-</button>
                                    <span class="px-4 py-1">1</span>
                                    <button class="px-2 py-1 hover:bg-neutral-100">+</button>
                                </div>
                                <button class="font-medium text-primary-500 hover:text-primary-600">Remove</button>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="flex items-start border-b border-neutral-200 pb-4">
                        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-md border border-neutral-200">
                            <img src="/api/placeholder/80/80" alt="Product image" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="ml-4 flex flex-1 flex-col">
                            <div class="flex justify-between text-base font-medium text-neutral-900">
                                <h3>Smart Watch Series 5</h3>
                                <p class="ml-4">$199.99</p>
                            </div>
                            <p class="mt-1 text-sm text-neutral-500">Silver</p>
                            <div class="flex items-center justify-between text-sm mt-2">
                                <div class="flex items-center border rounded">
                                    <button class="px-2 py-1 hover:bg-neutral-100">-</button>
                                    <span class="px-4 py-1">1</span>
                                    <button class="px-2 py-1 hover:bg-neutral-100">+</button>
                                </div>
                                <button class="font-medium text-primary-500 hover:text-primary-600">Remove</button>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Item 3 -->
                    <div class="flex items-start pb-4">
                        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-md border border-neutral-200">
                            <img src="/api/placeholder/80/80" alt="Product image" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="ml-4 flex flex-1 flex-col">
                            <div class="flex justify-between text-base font-medium text-neutral-900">
                                <h3>Smartphone Stand</h3>
                                <p class="ml-4">$24.99</p>
                            </div>
                            <p class="mt-1 text-sm text-neutral-500">Aluminum</p>
                            <div class="flex items-center justify-between text-sm mt-2">
                                <div class="flex items-center border rounded">
                                    <button class="px-2 py-1 hover:bg-neutral-100">-</button>
                                    <span class="px-4 py-1">1</span>
                                    <button class="px-2 py-1 hover:bg-neutral-100">+</button>
                                </div>
                                <button class="font-medium text-primary-500 hover:text-primary-600">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cart Footer -->
            <div class="border-t border-neutral-200 p-4 space-y-4">
                <!-- Subtotal -->
                <div class="flex justify-between text-base font-medium text-neutral-900">
                    <p>Subtotal</p>
                    <p>$524.97</p>
                </div>
                <p class="text-sm text-neutral-500">Shipping and taxes calculated at checkout.</p>

                <!-- Checkout Button -->
                <div class="mt-6">
                    <a href="#" class="w-full flex items-center justify-center rounded-md border border-transparent bg-primary-500 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-primary-600 transition-colors">
                        Checkout
                    </a>
                </div>

                <!-- Continue Shopping -->
                <div class="mt-6 flex justify-center text-center text-sm text-neutral-500">
                    <p>
                        or
                        <button id="continue-shopping" class="font-medium text-primary-500 hover:text-primary-600 transition-colors">
                            Continue Shopping
                            <span aria-hidden="true"> &rarr;</span>
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add JavaScript for Cart Functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cartButton = document.querySelector('.indicator').closest('button');
        const cartOffcanvas = document.getElementById('cart-offcanvas');
        const cartPanel = document.getElementById('cart-panel');
        const cartBackdrop = document.getElementById('cart-backdrop');
        const closeCartButton = document.getElementById('close-cart');
        const continueShoppingButton = document.getElementById('continue-shopping');

        // Function to open cart
        function openCart() {
            cartOffcanvas.classList.remove('pointer-events-none');
            cartBackdrop.classList.remove('opacity-0');
            cartPanel.classList.remove('translate-x-full');
            document.body.classList.add('overflow-hidden'); // Prevent body scroll
        }

        // Function to close cart
        function closeCart() {
            cartPanel.classList.add('translate-x-full');
            setTimeout(() => {
                cartBackdrop.classList.add('opacity-0');
                cartOffcanvas.classList.add('pointer-events-none');
                document.body.classList.remove('overflow-hidden');
            }, 300);
        }

        // Event listeners
        cartButton.addEventListener('click', openCart);
        closeCartButton.addEventListener('click', closeCart);
        continueShoppingButton.addEventListener('click', closeCart);
        cartBackdrop.addEventListener('click', closeCart);

        // Close cart when pressing ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeCart();
            }
        });
    });
</script>
