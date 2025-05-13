<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- jQuery -->
    <script src="{{ asset('libs/jquery/jquery-3.7.1.min.js') }}"></script>

    <!-- icons -->
    <link rel="stylesheet" href="{{ asset('frontend/libs/frontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/libs/frontawesome/css/frontawesome.min.css') }}">

    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" />

    <!-- Include Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>
    <!-- Top Navigation -->
    @include('frontend.layouts.top-nav')

    <!-- Bottom Navigation -->
    @include('frontend.layouts.bottom-nav')

    <div class="container mx-auto">
        @yield('contents')
    </div>

    @include('frontend.layouts.footer')

    @stack('scripts')
</body>

</html>
