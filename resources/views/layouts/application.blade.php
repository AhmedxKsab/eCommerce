<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bootstrap learn')</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/design.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @stack('styles')
</head>
<body>
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/all.min.js') }}"></script>
    @stack('scripts')
</body>
</html>