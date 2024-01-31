@extends('layouts.main_footer')  <!-- System Layouting Eksekusi File 'View-layouts-main' -->
@extends('layouts.main_card')

@section('container')
<script src="js/parallax.js"></script>
    <!-- CARA BIASA TANPA MENGGUNAKAN PARAM DATA -->
    <center>
        <h2 style="color: #0D6EFD; font-weight:bold; font-family:cursive;"><font style="color: #FFD700;">'</font> About METAVERSE Produksi dari Universitas Dian Nuswantoro <font style="color: #FFD700;">'</font></h2>
    </center>
    
    
    <!-- 
        <img src="img/Metaverse.jpg" alt="udinus smg" width="200px" class="img-thumbnail rounded-circle">
    
    <p>METAVERSE UDINUS</p>
    -->
    <!-- MENGGUNAKAN ENCAPSULASI ARRAY -->
        @foreach ($About as $About)
        <article class="mb-5">
            <h2>
                <a href="/About/{{ $About["slug"] }}"><i class="bi bi-filter-circle"></i></a>
            </h2>
            <h4><font style="color: #FFD700;">{{ $About["title"] }}</font></h4>
            <h5>{{ $About["author"] }}</h5>
            <p>{{ $About["body"] }}</p>
        </article>
        @endforeach

@endsection

@section('container2')
{{-- START JUMBOTRON --}}
<section class="jumbotron">
    <center>
      <a style="text-decoration:none" href="#sambutanup" id="sambutandown">
        <img src="img/rektor.png" alt="rektor udinus" width="120" 
        class="rounded-circle" style="padding-top: 2%"/>
      </a>
       <b><p class="lead" style="align-center; padding-top:1%;"><font style="color: #0D6EFD;">Would you like to be an entrepreneurial leader who ignites Indonesia’s future?<br>
        At Dian Nuswantoro university, we will prepare you for a better future</font></p></b>
        <small>Prof. Dr. Ir. Edi Noersasongko, M.Kom.

        <br><i>UDINUS Rector</i></small>
    </center>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,74.7C384,96,480,160,576,192C672,224,768,224,864,218.7C960,213,1056,203,1152,208C1248,213,1344,235,1392,245.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
  {{-- FINISH JUMBOTRON --}}
@endsection


@section('container3')
{{-- start container --}}
<section id="about" style="min-height: 300px">
    <div class="container">
        <div class="row text-center mb-3">
            {{-- judul --}}
            <div class="col">
              <a style="text-decoration:none" href="#dukunganappup"><h2 id="dukunganappdown" style="color: #0D6EFD; font-weight:bold; font-family:cursive;"><font style="color: #FFD700;">'</font> Dukungan Aplikasi <font style="color: #FFD700;">'</font></h2></a>
            </div>
            {{-- isi content --}}
        </div>
        <div class="row justify-content-center fs-5 text-center">
            <div class="col-4">
                <p style="font-family:sans-serif;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci minima odit quam quia eius perferendis totam quibusdam commodi dolores est?</p>
            </div>
            <div class="col-4" style="font-family:sans-serif;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ducimus tenetur, repudiandae repellendus consectetur rem maxime aliquam cum necessitatibus optio, dolorum placeat reprehenderit nihil expedita!</p>
            </div>
        </div>
    </div>
</section>
{{-- finish container --}}
<section class="jumbotron2" style=" background-color: #ffffff;">
<ul class="collection" style="margin-left: 15%; margin-right:15%">
    {{-- table 1 --}}
    <li class="collection-item avatar">
      <img src="img/profilecarousel.png" alt="" class="circle">
      <span class="title"><b><font style="color:#464646">Profile</font></b></span>
      <p style="margin-right: 5%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eaque animi perferendis impedit officia ut alias reiciendis dolore quisquam beatae. <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, assumenda?
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">more</i></a>
    </li>
    {{-- table 2 --}}
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title"><b><font style="color:#464646">Collection</font></b></span>
      <p style="margin-right: 5%">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, quasi. <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia accusamus qui sunt. Labore, eum corporis.
      </p>
      <a href="/Collection" class="secondary-content"><i class="material-icons">more</i></a>
    </li>
    {{-- table 3 --}}
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title"><b><font style="color:#464646">Fitur - Fitur</font></b></span>
      <p style="margin-right: 5%">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Commodi perferendis error vel repellat facilis, at quo eveniet esse veniam aspernatur optio ratione, ipsam, velit maiores tempore culpa minima necessitatibus impedit. <br>
         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, voluptatem?
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">more</i></a>
    </li>
    {{-- table 4 --}}
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title"><b><font style="color:#464646">Rekomendasi Penggunaan</font></b></span>
      <p style="margin-right: 5%">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est odit soluta, pariatur ex tempore modi id esse ullam porro, amet hic illum quis error culpa consequatur officiis, voluptatibus aut. Neque, saepe omnis! Cumque, commodi vero? <br>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum et hic temporibus excepturi earum reiciendis?
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">more</i></a>
    </li>
  </ul>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="0.9" d="M0,160L40,160C80,160,160,160,240,144C320,128,400,96,480,101.3C560,107,640,149,720,192C800,235,880,277,960,266.7C1040,256,1120,192,1200,144C1280,96,1360,64,1400,48L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
  </section>
  <section class="jumbotron2" style=" background-color: #FFDB1A;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,0L60,26.7C120,53,240,107,360,112C480,117,600,75,720,90.7C840,107,960,181,1080,197.3C1200,213,1320,171,1380,149.3L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</section>
@endsection

@section('container4')
<div class="container marketing">
<div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1" style="color: #f8bb22; font-weight:bold; font-family:cursive">Tujuan <span class="text-body-secondary">Program Dinus Metaverse.</span></h2>
      <p class="lead">Berdasarkan visi dan misi Program Dinus Metaverse, maka tujuan yang ditetapkan adalah:

        <ol>
        <li>Tercapainya peningkatan kualitas sumber daya program studi yang 
             memenuhi standar akademik dan industri.</li>
        <li>Terwujudnya penyelenggaraan pendidikan AI yang profesional
            dan bermutu.</li>
        <li>Tersedianya sumber daya manusia cakap karya, teknologi dan
            wirausaha yang memenuhi standar industri Kecerdasan Buatan pada tingkat global
            untuk pengembangan industri AI Indonesia.</li></ol></p>
        
    </div>
    <div class="col-md-5">
      <img src="img/tujuanudinus.png" class="d-block w-100" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Metaverse Udinus">
      <title>Placeholder</title>
    </div>
  </div>
</div>
<hr class="featurette-divider" style="margin: 5rem 0; letter-spacing: -.05rem; margin-left:5%; margin-right:5%">
  @endsection

   