<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="icon" href="favicon.ico"/>
    <meta name="csrf" content="{{ csrf_token() }}" />
    <title>APP</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/app.css') }}" />
    @yield('header')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/assets/js/respond.min.js') }}"></script>
    <![endif]-->
  </head>
  <body class="noselect">
    @include('preloader')
    @yield('content')
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    @yield('scripts')
  </body>
</html>