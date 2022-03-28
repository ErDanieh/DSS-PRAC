<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>This is example Bootstrap page</h1>
</body>
</html><!doctype html>
<html lang="es">


 <head>
   @include('partials.head')
 </head>

<body>
    <div>@include('partials.nav')</div>
    <div>@yield('content')</div>
</body>

</html>

