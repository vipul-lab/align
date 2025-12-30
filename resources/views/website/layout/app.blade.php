<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{ asset('') }}">
    <link rel="icon" href="{{ env('AWS_URL') }}/images/favicon.ico" type="image/x-icon" />
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link href="{{ asset('assets/css/web.css') }}" rel="stylesheet" />
</head>

 <body class="bg-beige-50 text-gray-900 font-sans">


        @include('website.layout.header')



                
                @yield('content')
                
           
       
        @include('website.layout.footer')
<!-- 

        <script src="./scripts/lib/lenis.min.js" defer></script>
    <script src="./scripts/lib/gsap.min.js" defer></script>
    <script src="./scripts/lib/SplitText.min.js" defer></script>
    <script src="./scripts/lib/ScrollTrigger.min.js" defer></script> -->
    <script src="{{ asset('assets/js/web-plugin.js') }}"></script>
    <script src="./scripts/animation.js" defer></script>
    <script src="./scripts/core.js"></script>


    @stack('scripts')
</body>

</html>