@props(['product'])

<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
    <a href="{{ route('products.show', $product->slug) }}">
        <div class="relative">
            <img src="{{ storage_url($product->thumbnail) }}" alt="{{ $product->name }}"
                class="w-full h-48 object-cover transition-transform duration-300 ease-in-out transform hover:scale-105">
            @if ($product->badge)
                <div
                    class="absolute top-2 right-2 bg-{{ $product->badge_color ?? 'blue' }}-500 text-white text-xs font-bold px-2 py-1 rounded">
                    {{ strtoupper($product->badge) }}
                </div>
            @endif
        </div>
    </a>

    <div class="p-4">
        <a href="{{ route('products.show', $product->slug) }}">
            <h3 class="text-sm font-semibold text-neutral-900 mb-2 line-clamp-1 hover:underline leading-snug">
                {{ $product->name }}
            </h3>
        </a>

        <div class="flex justify-between items-center mb-3">
            <div class="flex items-center text-yellow-400 text-xs">
                @php
                    $rating = $product->rating ?? 4;
                    $fullStars = floor($rating);
                    $halfStar = $rating - $fullStars >= 0.5;
                @endphp
                @for ($i = 0; $i < $fullStars; $i++)
                    <i class="fas fa-star"></i>
                @endfor
                @if ($halfStar)
                    <i class="fas fa-star-half-alt"></i>
                @endif
                @for ($i = $fullStars + $halfStar; $i < 5; $i++)
                    <i class="far fa-star"></i>
                @endfor
                <span class="text-neutral-500 ml-1">({{ number_format($rating, 1) }})</span>
            </div>

            <span class="text-primary-600 font-medium text-xs">{{ money($product->selling_price) }}</span>
        </div>

        <a href="{{ route('products.show', $product->slug) }}"
            class="mx-auto block w-fit text-xs bg-primary-600 hover:bg-primary-700 text-white px-4 py-1.5 rounded font-medium transition text-center">
            <i class="fas fa-cart-flatbed mr-1"></i>
            Add to Bag
        </a>
    </div>
</div>
