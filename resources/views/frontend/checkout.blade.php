@extends('frontend.layouts.app')

@section('contents')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-center mb-8">Checkout</h1>

        <!-- Checkout Steps -->
        <ul class="steps steps-horizontal w-full mb-8">
            <li class="step step-primary">Cart</li>
            <li class="step step-primary">Shipping</li>
            <li class="step">Payment</li>
            <li class="step">Confirm</li>
        </ul>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Order Summary -->
            <div class="lg:col-span-2">
                <div class="bg-base-200 rounded-lg p-6 mb-6">
                    <h2 class="text-xl font-semibold mb-4">Order Summary</h2>
                    <div class="overflow-x-auto">
                        <table class="table w-full">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex items-center space-x-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle w-12 h-12">
                                                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Product image" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold">Premium Headphones</div>
                                                <div class="text-sm opacity-50">Black</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>$129.99</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center space-x-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle w-12 h-12">
                                                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Product image" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold">Wireless Charger</div>
                                                <div class="text-sm opacity-50">White</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>$49.98</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Shipping Information -->
                <div class="bg-base-200 rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4">Shipping Information</h2>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">First Name</span>
                                </label>
                                <input type="text" placeholder="First Name" class="input input-bordered w-full" />
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">Last Name</span>
                                </label>
                                <input type="text" placeholder="Last Name" class="input input-bordered w-full" />
                            </div>
                        </div>

                        <div class="form-control mb-4">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="email" placeholder="Email" class="input input-bordered w-full" />
                        </div>

                        <div class="form-control mb-4">
                            <label class="label">
                                <span class="label-text">Address</span>
                            </label>
                            <input type="text" placeholder="Street Address" class="input input-bordered w-full mb-2" />
                            <input type="text" placeholder="Apt, Suite, etc. (optional)" class="input input-bordered w-full" />
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">City</span>
                                </label>
                                <input type="text" placeholder="City" class="input input-bordered w-full" />
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">State</span>
                                </label>
                                <select class="select select-bordered w-full">
                                    <option disabled selected>Select State</option>
                                    <option>California</option>
                                    <option>New York</option>
                                    <option>Texas</option>
                                    <!-- Add more states as needed -->
                                </select>
                            </div>
                            <div class="form-control w-full">
                                <label class="label">
                                    <span class="label-text">ZIP Code</span>
                                </label>
                                <input type="text" placeholder="ZIP Code" class="input input-bordered w-full" />
                            </div>
                        </div>

                        <div class="form-control mb-4">
                            <label class="label">
                                <span class="label-text">Phone Number</span>
                            </label>
                            <input type="tel" placeholder="Phone Number" class="input input-bordered w-full" />
                        </div>
                    </form>
                </div>
            </div>

            <!-- Order Total and Payment -->
            <div class="lg:col-span-1">
                <div class="bg-base-200 rounded-lg p-6 mb-6">
                    <h2 class="text-xl font-semibold mb-4">Order Total</h2>
                    <div class="flex justify-between mb-2">
                        <span>Subtotal</span>
                        <span>$179.97</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Shipping</span>
                        <span>$5.99</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Tax</span>
                        <span>$14.40</span>
                    </div>
                    <div class="divider my-2"></div>
                    <div class="flex justify-between font-bold text-lg">
                        <span>Total</span>
                        <span>$200.36</span>
                    </div>
                </div>

                <div class="bg-base-200 rounded-lg p-6 mb-6">
                    <h2 class="text-xl font-semibold mb-4">Payment Method</h2>
                    <div class="form-control">
                        <label class="label cursor-pointer">
                            <span class="label-text">Credit Card</span>
                            <input type="radio" name="payment" class="radio radio-primary" checked />
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer">
                            <span class="label-text">PayPal</span>
                            <input type="radio" name="payment" class="radio radio-primary" />
                        </label>
                    </div>
                    <div class="form-control">
                        <label class="label cursor-pointer">
                            <span class="label-text">Apple Pay</span>
                            <input type="radio" name="payment" class="radio radio-primary" />
                        </label>
                    </div>

                    <!-- Credit Card Form (shown when credit card is selected) -->
                    <div class="mt-4">
                        <div class="form-control mb-4">
                            <label class="label">
                                <span class="label-text">Card Number</span>
                            </label>
                            <input type="text" placeholder="1234 5678 9012 3456" class="input input-bordered w-full" />
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Expiration Date</span>
                                </label>
                                <input type="text" placeholder="MM/YY" class="input input-bordered w-full" />
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">CVV</span>
                                </label>
                                <input type="text" placeholder="123" class="input input-bordered w-full" />
                            </div>
                        </div>

                        <div class="form-control mb-4">
                            <label class="label">
                                <span class="label-text">Name on Card</span>
                            </label>
                            <input type="text" placeholder="John Doe" class="input input-bordered w-full" />
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary w-full">Complete Purchase</button>

                <div class="text-center mt-4 text-sm text-base-content/70">
                    <p>By completing your purchase, you agree to our <a href="#" class="link link-primary">Terms of Service</a> and <a href="#" class="link link-primary">Privacy Policy</a>.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
