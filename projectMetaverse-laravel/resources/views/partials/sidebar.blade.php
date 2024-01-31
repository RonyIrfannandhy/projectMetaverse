<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
{{-- BOOTSTRAP ICON --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<body>


<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block" style="display:none;z-index:5" id="mySidebar">

  <button class="w3-bar-item w3-button w3-xxlarge" onclick="w3_close()">Close <i class="bi bi-chevron-bar-left"></i></button>
  <div class="margin" style="margin-left: 15%">
    <br>
      <a class="nav-link {{ ($title === "Utama") ? 'active' : '' }}" href="/"><i class="bi bi-houses"></i>
        Utama</a>
      <br>
      <a class="nav-link {{ ($title === "/register") ? 'active' : '' }}" href="/register"><i class="bi bi-person-lines-fill"></i> 
        Registrasi</a>
      <br>
        <button type="submit" class="btn btn-primary btn-block">
          <a class="nav-link {{ ($title === "/login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i>
            Login</a></button>

  </div>
</div>

<!-- Page Content -->
<div id="logopmb" class="logopmb" style="width: 1280px; height: 0px; padding-left:1025px;">
<a href="/">
    <img src="img/InfoPMB.png" class="d-block w-100" alt="Metaverse Udinus">
    </a>
    </div>
<div class="w3-overlay" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div>
<div id="logoudinus" class="logo" style="width: 350px; height: 0px; padding-left:80px">
<a href="/">
    <img src="img/UdinusPresent.png" class="d-block w-100" alt="Metaverse Udinus">
    </a>
    </div>
    
  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
</div>
     
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
          
</body>
</html>
