<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
    font-family: "Ubuntu", sans-serif;
    padding: 0;
    margin: 0;
}
.container {
    display: flex;
    min-height: 100vh;
}
.sidebar {
    background-color: #007fa0;
    width: 340px;
    padding: 9px;
    display: flex;
    box-sizing: border-box;
    flex-direction: column;
}
.header{
    font-size: 20px;
    font-weight: bold;
    display: block;
    margin-top: 10px;
}
.sidebar-nav a {
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    color: #000000;
    transition: background-color 0.3s;
    font-size: 15px;
    margin-right: 10px  ;
}

.description {
    padding: 10px 20px;
}

.list-item.logo {
    height: 100px;
    width: 50px;
}
.list-item {
    object-fit: cover;
    height: 100%;
    width: 100%;
}
.list-item {
    height: 100px;
    width: 50px;
}
.list-item.logo img {
    object-fit: cover;
    height: 100%;
    width: 100%;
}
.sidebar a {
    text-decoration: none;
}
.sidebar .main .list-item .description {
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 16px;
    text-align: center;
    color: white;
}

/* Mengatur ulang beberapa gaya default dan menentukan jenis font */
body {
    margin: 0;
    font-family: Arial, sans-serif;
}

/* Gaya untuk seluruh navbar */
.navbar {
    height: 100px;
    background-color: #137fa3;
    overflow: hidden;
}

/* Gaya untuk daftar tak-terurut yang berisi item navigasi */
.navbar-list {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

/* Gaya untuk setiap item navbar */
.navbar-item {
    float: left;
}

/* Gaya untuk tautan dalam setiap item navbar */
.navbar-item a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Menampilkan konten dropdown saat mengarahkan kursor pada item dropdown */
.navbar-item.dropdown:hover .dropdown-content {
    display: block;
}

/* Gaya untuk kontainer konten dropdown */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    z-index: 1;
}

/* Gaya untuk tautan dalam konten dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

/* Sorot tautan dropdown saat dihover */
.dropdown-content a:hover {
    background-color: #ddd;
}

/* Sorot tautan navbar saat dihover */
.navbar-item a:hover {
    background-color: #ddd;
    color: black;
}

    </style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css"> <!-- Menghubungkan file CSS eksternal -->
<title>Dropdown Navbar</title>
</head>

<body>
<!-- Container untuk navbar -->
<nav class="navbar">
  
<!-- Daftar tak-terurut untuk item navigasi -->
<ul class="navbar-list">

<!-- Tautan untuk halaman "Home" -->
<li class="navbar-item"><a href="#"></a></li>


<!-- Tautan "Services" dengan menu dropdown -->
<li class="navbar-item dropdown">
<a href="#"></a>

<!-- Kontainer untuk konten dropdown -->

</li>

<!-- Tautan untuk halaman "About" -->
<li class="navbar-item"><a href="#"></a></li>

<!-- Tautan untuk halaman "Contact" -->
<li class="navbar-item"><a href="#"></a></li>
</ul>
</nav>
</body>
</html>
<head>
  <meta charset="UTF-8">
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <div class="header">
        <span >Carwash</span>
        <div class="list-item logo">
          <a href="#">
            <img src="{{ asset('images/bkaso.png') }}" alt="" class="icon" style="width:110px; height:70px padding: 5px;">
            <span class="description-header"></span>
          </a>
        </div>
      </div>
      <br>
      <br>
      <div class="main">
        <div class="nav-item">
          <a href="#" style="color: #ffffff;">
            <img src="{{ asset('images/dashboard.png') }}" alt="" class="icon"  style="width:40px; height:30px;">
            <span class="description">Dashboard</span>
          </a>
        </div>
      </div>
      <br>
      <br>
      <div class="main">
        <div class="nav-item">
          <a href="#"style="color: #ffffff;">
            <img src="{{ asset('images/datakategori.png') }}" alt="" class="icon"  style="width:40px; height:30px;">
            <span class="description">Data Kategori</span>
          </a>
        </div>
    </div>
<br>
<br>
    <div class="main">
        <div class="nav-item">
          <a href="#"style="color: #ffffff;">
            <img src="{{ asset('images/transaction.png') }}" alt="" class="icon"  style="width:40px; height:30px;">
            <span class="description">Data Transaksi</span>
          </a>
        </div>
    </div>
    <br>
    <br>
    <div class="main">
        <div class="nav-item">
          <a href="#"style="color: #ffffff;">
            <img src="{{ asset('images/laporan.png') }}" alt="" class="icon"  style="width:40px; height:30px;">
            <span class="description">Laporan</span>
          </a>
        </div>
    </div>
    <br>
      <br>
      <div class="main">
        <div class="nav-item">
          <a href="#" style="color: #ffffff;">
            <img src="{{ asset('images/logout.png') }}" alt="" class="icon"  style="width:40px; height:30px;">
            <span class="description">Logout</span>
          </a>
        </div>
      </div>
  </div>
</body>
</html>