@extends('layouts.main_footer')  <!-- System Layouting Eksekusi File 'View-layouts-main' -->
@extends('layouts.main_carousel')  <!-- System Layouting Eksekusi File 'View-layouts-main' -->

<!-- Cetak Encapsulasi class Container {WAJIB SECTION UNTUK MENGUBAH ISI YIELD} -->
@section('container')
<script src="js/script.js"></script>
@endsection

@section('container2')
<center><h2 style="color: #0D6EFD; font-weight:bold; font-family:cursive; padding-top:3%; padding-bottom:1%">
    <img src="img/logoudinus.png" style="width:60px; height:60px" alt="Metaverse Udinus"><font style="color: #FFD700">'</font>
    PROFIL METAVERSE UDINUS MENDUNIA
    <font style="color: #FFD700">'</font>
</h2></center>
@endsection

@section('container3')
<hr class="featurette-divider" style="margin: 5rem 0; letter-spacing: -.05rem; margin-left:5%; margin-right:5%">
    <div class="col-md-12" style="background-image: url('img/bgcontentcarousel3.png'); background-size:100%; opacity: 3; filter: alpha(opacity=1000);">
        <h2 class="featurette-heading fw-normal lh-1" style="color: #f8bb22; font-weight:bold; font-family:cursive; padding-left:17%; padding-top:4%; padding-bottom:1%;"><font style="color: #FFD700">Dinus Metaverse</font> <span class="text-body-secondary"><font style="color: #dfdddd">Latar Belakang</font></span></h2>
      {{-- isi paragraf --}}
        <p class="lead" style="padding-left: 17%; padding-bottom:1%; padding-right:49%; text-align:justify">
            <font style="color: #ffffff; font-size:49%">
                <b>
                    <font style="color: #FFD700;">"</font>Program Dinus Metaverse pada Fakultas Ilmu Komputer Universitas Dian Nuswantoro Semarang (UDINUS) 
                    di Dukung Oleh tenaga pengajar yang handal serta berpengalaman di bidang Artifical Intelegent, serta fasilitas kampus yang mumpuni.
                    Dilengkapi dengan sejumlah lab praktik berkualitas dan berteknologi terkini, memberikan kenyamanan para mahasiswa dalam belajar dan praktik. 
                    Beberapa fasilitas dan perangkat pendukung yang menjadi keunggulan Program Dinus Metaverse Udinus Seperti Laboratorium Praktik, 
                    Laboratorium Komputer, Pen Tablet, 3d Rendering Lab, E-Glass3D VR dan Studio VR.
                    UDINUS sebagai Universitas Modern di Kota Semarang, telah menjadi yang pertama dan satu-satunya yang menciptakan Robot VR Metaverse. 
                    Didukung dengan kampus masa kini yang terletak di lokasi strategis tengah kota (Tugu Muda / Lawang Sewu), memiliki banyak pilihan program studi studi kreatif dan terkini, 
                    UDINUS sangat ideal untuk menjadi pilihan tempat belajar masa depan Anda.<font style="color: #FFD700"> "</font>
                </b>
            </font>
        </p>
    

        <h2 class="featurette-heading fw-normal lh-1" style="color: #f8bb22; font-weight:bold; font-family:cursive; padding-left:28%; padding-top:1%; padding-bottom:5%;">
            <font style="color: #FFD700">
                TUNGGU APALAGI?!<br>
                BELAJAR ROBOT METAVERSE DI UDINUS, YUK..
            </font>
        </h2>
        <p style="padding-left: 70%; padding-bottom:7%"><a class="btn btn-lg btn-primary" href="/Contact">JOIN NOW!</a></p>
    </div>
<hr class="featurette-divider" style="margin: 5rem 0; letter-spacing: -.05rem; margin-left:5%; margin-right:5%">
@endsection
