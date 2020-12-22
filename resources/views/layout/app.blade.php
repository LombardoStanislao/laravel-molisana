<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title-page', 'Laravel | La Molisana')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
            @include('partials.header')

        <main>
            @yield('content')
        </main>

        <footer>
            @include('partials.footer')

        </footer>


        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
