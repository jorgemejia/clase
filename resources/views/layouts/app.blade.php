<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tiendita de La esquina</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}"  />
    <!-- inject css start -->
    <!--== bulma css -->
    <link href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.css" rel="stylesheet" type="text/css" />
    <!-- inject css end -->
</head>

    <body>

        <div class="page-wrapper">

            <header>
                @include('partials.header')
            </header>

            @yield('content')

            <footer class="footer">
                @include('partials.footer')
            </footer>

        </div>

        <!-- inject js start -->

    </body>
</html>