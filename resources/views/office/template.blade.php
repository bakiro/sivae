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
    @yield('head')
    {{-- APP CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/app.css') }}" />
    {{-- Theme CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sb-admin-2.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="{{ asset('/assets/js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('/assets/js/respond.min.js') }}"></script>
    <![endif]-->
  </head>
  <body class="noselect">
    @include('preloader')
    @yield('content')
     {{-- jQuery --}}
    <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
    {{-- Bootstrap Core JavaScript --}}
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    {{-- JavaScript Page --}}
    @yield('scripts')
  </body>
</html>