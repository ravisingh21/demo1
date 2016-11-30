<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>naisadak - @yield('title',' Home Page')</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      @include('include.nav_admin')
  <!--@include('include.table_admin')-->
    </div>
    <br><br>
    <div class="container">
      @yield('content')
    </div>
    <br><br>
    <p class="bottom-bar">Copyright &copy; 2016 - All Rights Reserved - <a href="http://naisadak.org//">Naisadak.org</a></p>

  </body>
</html>
