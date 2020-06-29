<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">


    <title>@yield('title')</title>
  </head>
  <body>
    @include('layouts.partials.customerNavigation')
       <main class="py-4">
          <div class="container">
              @yield('content')
          </div>
       </main>

       <script src="{{asset('js/jquery.min.js')}}"></script>
     <script src="{{asset('js/bootstrap.min.js')}}"></script> 
     @yield('footer')
  </body>
</html>