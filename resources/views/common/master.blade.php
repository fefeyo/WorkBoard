<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title or "サイト名" }}</title>
        <link rel="stylesheet" href="{{ asset('css/fefeboot.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('add_css')
    </head>
    <body>
        @include('common.header')

        <div class="container">
            @yield('content')
        </div>

        @include('common.footer')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        @yield('add_js')
    </body>
</html>
