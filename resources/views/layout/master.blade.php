<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>naisadak - @yield('title','nai soch')</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  </head>
  <body>

    <div class="container">
      @include('include.nav')
    </div>
     <br><br>
    <div class="container">
    @yield('content')
    </div>
      <br><br>

      <p class="bottom-bar">Copyright &copy; 2016 - All Rights Reserved - <a href="http://naisadak.org//">Naisadak.org</a></p>
    

  </body>
</html>
