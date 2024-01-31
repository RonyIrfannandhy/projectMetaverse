<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>METAVERSE | CAROUSEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- BOOTSTRAP ICON --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body>
    @include('partials.sidebar') <!-- ENCAPSULASI DARI FILE 'PARTIALS-NAVBAR' derective .BLADE -->
      <!-- CONTENT -->
      <!-- CONTENT -->
    @include('partials.carousel') <!-- ENCAPSULASI DARI FILE 'PARTIALS-NAVBAR' derective .BLADE -->
         <!-- CONTENT -->  
         <div class="container mt-4">
       @yield('container') <!-- BLADE SYSTEM ENCAPSULASI AGAR LEBIH SIMPLE -->
    </div>
    <div class="container2 mt-4">
       @yield('container2') <!-- BLADE SYSTEM ENCAPSULASI AGAR LEBIH SIMPLE -->
    </div>
    @include('partials.card') <!-- ENCAPSULASI DARI FILE 'PARTIALS-NAVBAR' derective .BLADE -->
      <!-- CONTENT -->
    <div class="container3 mt-4">
        @yield('container3') <!-- BLADE SYSTEM ENCAPSULASI AGAR LEBIH SIMPLE -->
     </div>
    <!-- JAVA SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>