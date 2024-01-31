<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <section class="parallax">
    <div class="parallax-container">
      <h1 id="text" style="margin-left:10%; margin-top:10%;color: #FFD700; font-weight:bold; font-family:cursive;">
      Informasi Dinus Metaverse
    </h1>
      <h6 style="margin-left:10%; margin-top:2%; color: #ffffff; font-weight:bold; font-family:cursive;">
        Kolaborasi Tak Terbatas Antara Dosen & Mahasiswa!
      </h6>
      {{-- button group --}}
      <div class="btn-group" role="group" aria-label="Button group with nested dropdown" 
      style="margin-left:10%; margin-top:6%; margin-bottom:30%">
        <a style="text-decoration:none" href="#sejarahdown" button type="button" class="btn btn-primary"><p id="sejarahup">Sejarah</p></a>
        <a style="text-decoration:none" href="#sambutandown" button type="button" class="btn btn-primary"><p id="sambutanup">Sambutan</p></a>
        <a style="text-decoration:none" href="#dukunganappdown" button type="button" class="btn btn-primary"><p id="dukunganappup">Dukungan App</p></a>
      </div>
      <a style="margin-left: 13%;text-decoration:none" href="#homeup"><i id="homedown" class="material-icons" style="font-size: 40px; color:#d3d3d2">keyboard_capslock</i></a>
      {{-- parallax --}}
      <div class="parallax"><img src="img/bgudinuscarousel3.png"></div>
    </div>
      </section>
    <div class="section white">
      <center><div class="row container">
        <a style="text-decoration:none" href="#sejarahup"> <h2 id="sejarahdown" class="header" style="color: #0D6EFD; font-weight:bold; font-family:cursive;"><font style="color: #FFD700;">'</font> Metaverse Udinus <font style="color: #FFD700;">'</font></h2></a>
        <p class="grey-text text-darken-3 lighten-3">About METAVERSE Produksi dari Universitas Dian Nuswantoro. Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Explicabo delectus alias mollitia dolor nobis doloremque fugiat expedita.
             Fugit consectetur aspernatur, culpa unde veritatis repudiandae ipsum. Totam odio illum itaque? Dolorem dicta architecto earum. 
             Ducimus quaerat nostrum architecto rerum non asperiores voluptate odit saepe, nihil ea est consequuntur suscipit eos error mollitia similique dignissimos dicta modi repellat quas. 
             Impedit aperiam earum eveniet quia maiores nam veritatis, hic a. Illum, minima. Eveniet nihil culpa, veritatis unde doloremque, consectetur similique, cum mollitia aut ut adipisci non praesentium earum. 
             Tempore perferendis id accusantium, aliquid totam eos velit vel magnam,
             distinctio consequatu r voluptate error vitae.  Ducimus quaerat nostrum architecto rerum non asperiores voluptate odit saepe, nihil ea est consequuntur suscipit eos error mollitia similique dignissimos dicta modi repellat quas. 
             Impedit aperiam earum eveniet quia maiores nam veritatis, hic a. Illum, minima. Eveniet nihil culpa, veritatis unde doloremque, consectetur similique, cum mollitia aut ut adipisci non praesentium earum. 
             Tempore perferendis id accusantium, aliquid totam eos velit vel magnam,
             distinctio consequatur voluptate error vitae.</p>
      </div></center>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/bgudinuscarousel2.png"></div>
    </div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
      <script>
        document.addEventListener('DOMContentLoaded', function() {
          var para = document.querySelectorAll('.parallax');
       M.Parallax.init(para)
  });
</script>   
    </body>
  </html>