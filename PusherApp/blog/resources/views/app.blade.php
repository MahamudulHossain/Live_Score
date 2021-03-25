<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    @yield('content')


    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/pusher.min.js')}}"></script>
    @yield('script')
  </body>
</html>
