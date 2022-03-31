<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head')

<body>

   <div class="container-fluid">
      <div class="row flex-nowrap">
         <!-- Nav -->
         @include('partials.sidebar')

         <div class="content" style="max-width: 80%; margin-left: auto; margin-top: 5vh;">
            <!-- Contenido -->
            @yield('content')
         </div>
      </div>


   </div>


   <!-- Footer -->
   @include('partials.footer')
</body>