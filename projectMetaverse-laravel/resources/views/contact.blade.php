  <!-- System Layouting Eksekusi File 'View-layouts-main' -->
@extends('layouts.main_contact')

<!DOCTYPE html>
<html>
<title>navbar | about|collection|contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
{{-- BOOTSTRAP ICON --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<body>
   
   <!-- NAVBAR -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
    <div class="container" style="margin-top:2%; margin-bottom: 2%;">
        <div id="logoudinus" class="logo" style="width: 150px; height: -50px; padding-left:1px;">
          <a href="/Home">
             <img src="img/UdinusPresent.png" class="d-block w-100" alt="Metaverse Udinus">
          </a>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a style="font-size: 81%" class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/Home">Home</a>
          </li>
          <li class="nav-item">
            <a style="font-size: 81%" class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/About">About</a>
          </li>
          <li class="nav-item">
            <a style="font-size: 81%" class="nav-link {{ ($title === "Collection") ? 'active' : '' }}" href="/Collection">Collection</a>
          </li>
          <li class="nav-item">
            <a style="font-size: 81%" class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/Contact">Contact</a>
          </li>
        </ul>


        {{-- LOGOUT --}}
        <ul class="navbar-nav ms-auto" style="color: #ffffff; font-weight:bold; font-family:cursive; font-size:94%; margin-top:6%;">
        @auth
               <font style="color: #FFD700; margin-top:8%;">'</font><h style="margin-top:8%"> Welcome back, {{ auth()->user()->name }}</h><font style="color: #FFD700; margin-top:8%;">'</font><h style="margin-top:8%"> |</h>

                <li class="nav-item" style="margin-bottom: 15%">
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="nav-link"><i class="bi bi-box-arrow-right"></i>
                    </button>
                  </form>
                    </li>
              </ul>
      @else
        <button type="submit" class="btn btn-primary btn-block">
          <a class="nav-link {{ ($title === "/login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i>
            Login</a></button>
    @endauth 
          </ul>
        
        <!-- 
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/login" class="nav-link">Login</a>
          </li>
        </ul>
      -->
      </div>
    </div>
  </nav>
</body>
</html>