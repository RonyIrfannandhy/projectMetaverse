@extends('layouts.main_footer')  <!-- System Layouting Eksekusi File 'View-layouts-main' -->
@extends('layouts.main_About_Deskripsi')


@section('container')
    <article>   
        <h2>{{ $About_Deskripsi["title"] }}</h2>
        <h5>{{ $About_Deskripsi["author"] }}</h5>
        <p>{{ $About_Deskripsi["body"] }}</p>
    </article>

    <a href="/About">Back to About</a>
@endsection