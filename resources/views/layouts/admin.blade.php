<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.head')

<body>

   <div class="container-fluid">
      <div class="row flex-nowrap">
         <!-- Nav -->
         @include('partials.sidebar')

         <div class="content" style="width: 1100px; margin: auto; margin-left: 25%; margin-top: 5vh;">
            <!-- Contenido -->
            @yield('content')
         </div>
      </div>


   </div>


   <!-- Footer -->
   @include('partials.footer')
</body>