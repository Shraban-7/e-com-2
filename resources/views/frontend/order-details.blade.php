@extends('frontend.layouts.app')

@section('contents')
    <!-- Breadcrumbs -->
    <div class="text-sm breadcrumbs px-4 md:px-8 pt-4">
        <ul>
            <li><a>Home</a></li>
            <li><a>My Account</a></li>
            <li><a>Orders</a></li>
            <li>Order #ORD-2023-8756</li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 md:px-8 py-6">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Order Summary Section -->
            <div class="md:w-2/3">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-bold">Order #ORD-2023-8756</h1>
                    <span class="badge badge-success gap-2">
                        Delivered
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-4 h-4 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </span>
                </div>

                <div class="alert bg-base-200 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-info shrink-0 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="font-bold">Order placed on May 15, 2023</h3>
                        <div class="text-sm">Delivered on May 18, 2023</div>
                    </div>
                </div>

                <!-- Order Items -->
                <div class="card bg-base-100 shadow-xl mb-6">
                    <div class="card-body">
                        <h2 class="card-title">Order Items</h2>

                        <!-- Item 1 -->
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-4 border-b">
                            <div class="flex gap-4 items-center mb-3 sm:mb-0">
                                <div class="avatar">
                                    <div class="w-16 h-16 rounded">
                                        <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Premium Wireless Headphones" />
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Premium Wireless Headphones</h3>
                                    <p class="text-sm opacity-70">Color: Black | SKU: WH-PRO-BLK</p>
                                    <div class="badge badge-outline mt-1">Electronics</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="font-semibold">$129.99</div>
                                <div class="text-sm">Qty: 1</div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-4 border-b">
                            <div class="flex gap-4 items-center mb-3 sm:mb-0">
                                <div class="avatar">
                                    <div class="w-16 h-16 rounded">
                                        <img src="https://daisyui.com/images/stock/photo-1560343090-f0409e92791a.jpg" alt="Smart Watch Series 5" />
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Smart Watch Series 5</h3>
                                    <p class="text-sm opacity-70">Color: Silver | SKU: SW-S5-SLV</p>
                                    <div class="badge badge-outline mt-1">Wearables</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="font-semibold">$249.99</div>
                                <div class="text-sm">Qty: 1</div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center py-4">
                            <div class="flex gap-4 items-center mb-3 sm:mb-0">
                                <div class="avatar">
                                    <div class="w-16 h-16 rounded">
                                        <img src="https://daisyui.com/images/stock/photo-1523275335684-37898b6baf30.jpg" alt="Portable Power Bank 20000mAh" />
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold">Portable Power Bank 20000mAh</h3>
                                    <p class="text-sm opacity-70">Color: White | SKU: PB-20K-WHT</p>
                                    <div class="badge badge-outline mt-1">Accessories</div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="font-semibold">$49.99</div>
                                <div class="text-sm">Qty: 1</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shipping Information -->
                <div class="card bg-base-100 shadow-xl mb-6">
                    <div class="card-body">
                        <h2 class="card-title">Shipping Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
                            <div>
                                <h3 class="font-semibold mb-2">Shipping Address</h3>
                                <p>John Doe</p>
                                <p>123 Main Street</p>
                                <p>Apt 4B</p>
                                <p>New York, NY 10001</p>
                                <p>United States</p>
                                <p>Phone: (555) 123-4567</p>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-2">Shipping Method</h3>
                                <p>Express Delivery (2-3 business days)</p>
                                <div class="mt-4">
                                    <h3 class="font-semibold mb-2">Tracking Information</h3>
                                    <p>Carrier: FedEx</p>
                                    <p>Tracking #: FX9876543210</p>
                                    <a href="#" class="link link-primary">Track Package</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary Sidebar -->
            <div class="md:w-1/3">
                <div class="card bg-base-100 shadow-xl sticky top-4">
                    <div class="card-body">
                        <h2 class="card-title">Order Summary</h2>
                        <div class="py-4">
                            <div class="flex justify-between mb-2">
                                <span>Subtotal</span>
                                <span>$429.97</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Shipping</span>
                                <span>$12.99</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span>Tax</span>
                                <span>$35.48</span>
                            </div>
                            <div class="divider my-2"></div>
                            <div class="flex justify-between font-bold">
                                <span>Total</span>
                                <span>$478.44</span>
                            </div>
                        </div>

                        <div class="card bg-base-200 mb-4">
                            <div class="card-body p-4">
                                <h3 class="font-semibold">Payment Information</h3>
                                <div class="flex items-center gap-2 mt-2">
                                    <div class="w-10 h-6 bg-primary rounded flex items-center justify-center text-white font-bold text-xs">VISA</div>
                                    <span>•••• •••• •••• 4567</span>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <button class="btn btn-primary btn-block">Download Invoice</button>
                            <button class="btn btn-outline btn-block">Return Items</button>
                            <button class="btn btn-ghost btn-block">Need Help?</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Timeline -->
    <div class="container mx-auto px-4 md:px-8 py-6">
        <h2 class="text-xl font-bold mb-4">Order Timeline</h2>
        <ul class="timeline timeline-vertical">
            <li>
                <div class="timeline-start timeline-box">May 15, 2023</div>
                <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-success">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="timeline-end timeline-box">Order Placed</div>
                <hr/>
            </li>
            <li>
                <hr/>
                <div class="timeline-start timeline-box">May 16, 2023</div>
                <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-success">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="timeline-end timeline-box">Payment Confirmed</div>
                <hr/>
            </li>
            <li>
                <hr/>
                <div class="timeline-start timeline-box">May 16, 2023</div>
                <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-success">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="timeline-end timeline-box">Order Processed</div>
                <hr/>
            </li>
            <li>
                <hr/>
                <div class="timeline-start timeline-box">May 17, 2023</div>
                <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-success">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="timeline-end timeline-box">Shipped</div>
                <hr/>
            </li>
            <li>
                <hr/>
                <div class="timeline-start timeline-box">May 18, 2023</div>
                <div class="timeline-middle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-success">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="timeline-end timeline-box">Delivered</div>
            </li>
        </ul>
    </div>
@endsection
