@extends('layouts.main_footer')  <!-- System Layouting Eksekusi File 'View-layouts-main' -->
@extends('layouts.main')
@section('container')
    <h1>Collection Robot Metaverse dari UDINUS</h1>

    <!-- COBA MPAKAI PARAM DATA -->
    <h3><?php echo $nama_instansi; ?></h3> <!-- PENULISAN LENGKAP PHP -->
    <p><?= $email; ?></p> <!-- PENULISAN SIMPLE PHP -->
    <p>{{ $contact }}</p> <!-- PENULISAN MENGGUNAKAN " BLADE TEMPLATING " memudahkan php echo syarat (file php menggunakan .blade.php) -->
    <p><?= $project; ?></p>
    <img src="img/<?= $image; ?>" alt="udinus smg" width="200px">
@endsection

