<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('') }}">
    <link rel="icon" href="{{ env('AWS_URL') }}/images/favicon.ico" type="image/x-icon" />
	<title>@yield('title') | {{ env('APP_NAME') }}</title>
    <link href="{{ asset('assets/vendors/plugins.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/styles-admin.css') }}" rel="stylesheet"/>
</head>
<body id="kt_body" class="h-full app-blank dark:bg-coal-500">
    <!-- Theme Mode -->
  <script>
   const defaultThemeMode = 'light'; // light|dark|system
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
					themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches
						? 'dark'
						: 'light';
				}

				document.documentElement.classList.add(themeMode);
			}
  </script>
  	<!-- loader -->
	@include('admin.component.loader')
	<!-- siderbasr -->
    @yield('content')
    
	<script src="{{ asset('assets/vendors/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/core.bundle.js') }}"></script>
    
	@stack('scripts')
</body>
</html>