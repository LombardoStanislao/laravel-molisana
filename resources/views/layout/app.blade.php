<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('page-title', 'Laravel | La Molisana')</title>
        <script src="https://kit.fontawesome.com/7b09a46f67.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
            @include('partials.header')

            @yield('content')

        <footer>
            @include('partials.footer')

        </footer>


        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
