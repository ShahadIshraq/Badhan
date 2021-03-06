<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   
    {{-- <link rel="icon" href="http://v4-alpha.getbootstrap.com/favicon.ico"> --}}

    <title>Badhan</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />

    {{-- @yield('head') --}}

    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}

    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">
  </head>


  <body>

    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

    @yield('extra')

  </body>
</html>
