<!doctype html>
<html lang="en">
    <head><script src="../assets/js/color-modes.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.112.5">
        <title>Home Content</title>
    
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    
        <link rel="stylesheet" href="/css/home.css">
    </head>

  <body>
    @include('partials.navbar') <!-- ENCAPSULASI DARI FILE 'PARTIALS-NAVBAR' derective .BLADE -->
      <!-- CONTENT -->
      @include('partials.home') <!-- ENCAPSULASI DARI FILE 'PARTIALS-NAVBAR' derective .BLADE -->
      <!-- CONTENT -->
    <div class="container mt-4">
       @yield('container') <!-- BLADE SYSTEM ENCAPSULASI AGAR LEBIH SIMPLE -->
    </div>
    <!-- JAVA SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>