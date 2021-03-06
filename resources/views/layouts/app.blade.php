<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize/normalize.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        @include('compartidos.menu_nav')
        @yield('content')
    </div>

    <script src="{{ asset('js/jquery/jquery.js') }}"></script>
    <script src="{{ asset('js/CKEditor/ckeditor.js') }}"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>

        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
</body>
</html>
