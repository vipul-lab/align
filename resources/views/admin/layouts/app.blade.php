<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="dark" dir="ltr" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{ asset('') }}">
    <link rel="icon" href="{{ env('AWS_URL') }}/images/favicon.ico" type="image/x-icon" />
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <link href="{{ asset('assets/vendors/plugins.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/datatables.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
</head>

 <body class="antialiased flex h-full text-base text-foreground bg-[#F0F2F5] demo1 kt-sidebar-fixed kt-header-fixed">
    <!-- Theme Mode -->
    <script>
        const defaultThemeMode = 'dark'; // light|dark|system
        let themeMode;
        if (document.documentElement) {
            if (localStorage.getItem('kt-theme')) {
                themeMode = localStorage.getItem('kt-theme');
            } else if (
                document.documentElement.hasAttribute('data-kt-theme-mode')
            ) {
                themeMode =
                    document.documentElement.getAttribute('data-kt-theme-mode');
            } else {
                themeMode = defaultThemeMode;
            }
            if (themeMode === 'system') {
                themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ?
                    'dark' :
                    'light';
            }
            document.documentElement.classList.add(themeMode);
        }
    </script>
    <!-- loader -->
    
    <div class="flex grow">
        <!-- siderbasr -->
        @include('admin.layouts.sidebar')
        <!-- main content -->
        <div class="kt-wrapper flex grow flex-col">
            <main class="grow flex flex-col" id="content" role="content">
                @include('admin.layouts.header')
                @yield('content')
            </main>
        </div>
    </div>

    <script src="{{ asset('assets/vendors/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/core.bundle.js') }}"></script>


    @stack('scripts')
</body>

</html>