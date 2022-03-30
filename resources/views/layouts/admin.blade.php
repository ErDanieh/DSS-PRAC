<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head')

<body>
   <!-- Nav --> 
   @include('partials.sidebar')

   <!-- Contenido --> 
   @yield('content')

   <!-- Footer --> 
   @include('partials.footer')
</body>