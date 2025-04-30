@extends('frontend.layouts.app')

@section('contents')
    
    <!-- Breadcrumbs -->
    <div class="text-sm breadcrumbs px-4 md:px-8 pt-4">
        <ul>
            <li><a>Home</a></li>
            <li>My Account</li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 md:px-8 py-6">
        <h1 class="text-2xl font-bold mb-6">My Account</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- User Information Card -->
            <div class="lg:col-span-1">
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <div class="flex flex-col items-center text-center mb-4">
                            <div class="avatar mb-4">
                                <div class="w-24 rounded-full ring ring-primary ring-offset-base-100 ring-offset-2">
                                    <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                </div>
                            </div>
                            <h2 class="card-title">Emma Thompson</h2>
                            <p class="text-sm text-gray-500">Member since June 2022</p>
                            <div class="badge badge-primary mt-2">Premium Member</div>
                        </div>
                        
                        <div class="divider"></div>
                        
                        <div class="space-y-3">
                            <div>
                                <span class="text-sm text-gray-500">Email</span>
                                <p>emma.thompson@example.com</p>
                            </div>
                            <div>
                                <span class="text-sm text-gray-500">Phone</span>
                                <p>(555) 123-4567</p>
                            </div>
                            <div>
                                <span class="text-sm text-gray-500">Default Shipping Address</span>
                                <p>123 Main Street, Apt 4B<br>New York, NY 10001<br>United States</p>
                            </div>
                        </div>
                        
                        <div class="card-actions justify-center mt-4">
                            <button class="btn btn-outline btn-primary btn-sm">Edit Profile</button>
                        </div>
                    </div>
                </div>
                
                <!-- Account Stats -->
                <div class="card bg-base-100 shadow-xl mt-6">
                    <div class="card-body">
                        <h2 class="card-title">Account Summary</h2>
                        <div class="stats stats-vertical shadow">
                            <div class="stat">
                                <div class="stat-title">Total Orders</div>
                                <div class="stat-value">12</div>
                                <div class="stat-desc">Since joining</div>
                            </div>
                            
                            <div class="stat">
                                <div class="stat-title">Reward Points</div>
                                <div class="stat-value">245</div>
                                <div class="stat-desc text-success">↗︎ 14% more than last month</div>
                            </div>
                            
                            <div class="stat">
                                <div class="stat-title">Wishlist Items</div>
                                <div class="stat-value">7</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="lg:col-span-2">
                <div class="card bg-base-100 shadow-xl">
                    <div class="card-body">
                        <div class="flex justify-between items-center">
                            <h2 class="card-title">Recent Orders</h2>
                            <a href="#" class="link link-primary text-sm">View All Orders</a>
                        </div>
                        
                        <div class="overflow-x-auto">
                            <table class="table table-zebra">
                                <thead>
                                    <tr>
                                        <th>Order #</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ORD-7829</td>
                                        <td>May 12, 2023</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>$128.50</td>
                                        <td><a href="#" class="btn btn-ghost btn-xs">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>ORD-6547</td>
                                        <td>Apr 28, 2023</td>
                                        <td><span class="badge badge-warning">Shipped</span></td>
                                        <td>$76.20</td>
                                        <td><a href="#" class="btn btn-ghost btn-xs">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>ORD-5321</td>
                                        <td>Apr 15, 2023</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>$214.75</td>
                                        <td><a href="#" class="btn btn-ghost btn-xs">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>ORD-4290</td>
                                        <td>Mar 22, 2023</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>$95.40</td>
                                        <td><a href="#" class="btn btn-ghost btn-xs">Details</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Latest Order Details -->
                <div class="card bg-base-100 shadow-xl mt-6">
                    <div class="card-body">
                        <h2 class="card-title">Latest Order Details</h2>
                        <h3 class="text-lg font-medium">Order #ORD-7829 - May 12, 2023</h3>
                        
                        <div class="overflow-x-auto mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="flex items-center gap-3">
                                                <div class="avatar">
                                                    <div class="mask mask-squircle w-12 h-12">
                                                        <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Wireless Headphones" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="font-bold">Wireless Headphones</div>
                                                    <div class="text-sm opacity-50">Black | Premium</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>$89.99</td>
                                        <td>$89.99</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex items-center gap-3">
                                                <div class="avatar">
                                                    <div class="mask mask-squircle w-12 h-12">
                                                        <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Phone Case" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="font-bold">Phone Case</div>
                                                    <div class="text-sm opacity-50">Clear | Protective</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>2</td>
                                        <td>$14.99</td>
                                        <td>$29.98</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="font-bold">Subtotal</td>
                                        <td>$119.97</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="font-bold">Shipping</td>
                                        <td>$8.53</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td class="font-bold">Total</td>
                                        <td class="font-bold">$128.50</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                            <div>
                                <h3 class="font-medium mb-2">Shipping Address</h3>
                                <p>Emma Thompson<br>
                                123 Main Street, Apt 4B<br>
                                New York, NY 10001<br>
                                United States</p>
                            </div>
                            <div>
                                <h3 class="font-medium mb-2">Payment Method</h3>
                                <div class="flex items-center gap-2">
                                    <div class="w-10 h-6 bg-primary rounded flex items-center justify-center text-white font-bold text-xs">VISA</div>
                                    <span>•••• •••• •••• 4567</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-actions justify-end mt-6">
                            <button class="btn btn-outline btn-sm">Track Order</button>
                            <button class="btn btn-primary btn-sm">Buy Again</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Recommended Products -->
    <div class="container mx-auto px-4 md:px-8 py-6">
        <h2 class="text-xl font-bold mb-4">Recommended For You</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Product Card -->
            <div class="card bg-base-100 shadow-sm hover:shadow-md transition-shadow">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body p-4">
                    <h2 class="card-title text-base">Wireless Earbuds</h2>
                    <p class="text-primary font-medium">$49.99</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product Card -->
            <div class="card bg-base-100 shadow-sm hover:shadow-md transition-shadow">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body p-4">
                    <h2 class="card-title text-base">Smart Watch</h2>
                    <p class="text-primary font-medium">$129.99</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product Card -->
            <div class="card bg-base-100 shadow-sm hover:shadow-md transition-shadow">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body p-4">
                    <h2 class="card-title text-base">Portable Charger</h2>
                    <p class="text-primary font-medium">$34.99</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Add to Cart</button>
                    </div>
                </div>
            </div>
            
            <!-- Product Card -->
            <div class="card bg-base-100 shadow-sm hover:shadow-md transition-shadow">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body p-4">
                    <h2 class="card-title text-base">Bluetooth Speaker</h2>
                    <p class="text-primary font-medium">$79.99</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection