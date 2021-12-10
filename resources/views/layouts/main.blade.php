<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>BelgianProd :: @yield('title')</title>
        @section('style')
        <link rel="stylesheet" href="{{ asset('design/style.css') }}">
        @show
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('script')
        @show
    </body>
</html>