<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
  </head>
  <body>


    @yield('title')

    @yield('content')

    <a href="{{$link}}">link</a>

  </body>
</html>
