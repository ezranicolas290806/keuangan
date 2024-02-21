<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss','resources/js/app.js'])
  <title>Document</title>
  <style>
    .card {
      width: 350px; /* Sesuaikan lebar kartu */
      height: 150px; /* Sesuaikan tinggi kartu */
      margin-bottom: 20px; /* Atur jarak antara kartu */
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-size: cover;
      background-position: center;
      position: relative; /* Jadikan posisi relative untuk menentukan posisi absolut teks */
    }
    .card h3 {
      position: absolute; /* Jadikan posisi absolut */
      top: 0; /* Posisikan di atas kartu */
      left: 0; /* Posisikan di kiri kartu */
      width: 100%; /* Lebar sesuai dengan kartu */
      margin: 0;
      padding: 10px;
      background-color: rgba(0, 0, 0, 0.5); /* Atur latar belakang judul */
      color: white; /* Atur warna teks judul */
    }
  </style>
</head>
<body>
<nav class="navbar" style="background-color: #00BFFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/bkaso.png" style="width: 80px; height: 65px;" alt=""></a>
      <form class="d-flex" role="search">
        <button class="btn btn-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>

<div class="sidebar">
  <div class="logo d-flex">
    <img style="width: 120px; height: 110px; margin-top: -30px; display: flex;" src="{{ asset('images/bkaso.png') }}" alt="Logo">
    <span>Carwash</span>
    <br>
  </div>
  <ul class="sidebar-nav" style="color: black;">
    <li><a href="{{route('dashboardpm.index')}}"><img class="picture" src="{{ asset('images/grid.png') }}" alt="">Dashboard</a></li>
    <li><a href="{{route('layanan.index')}}"><img src="{{ asset('images/settings.png') }}" class="picture" alt="">Layanan</a></li>
    <li><a href="{{route('pemasukanpm.index')}}"><img class="picture" src="{{ asset('images/shopify.png') }}" alt="">Pemasukan</a></li>
    <li><a href="{{route('pengeluaranpm.index')}}"><img class="picture" src="{{ asset('images/shopping.png') }}" alt="">Pengeluaran</a></li>
  </ul>
</div>

<div class="right-section">
  <h2>Layanan</h2>
  <div class="card-container">
    <div class="card" style="background-image: url('{{ asset('images/uiihihi.jpg') }}');">
      <h3>Cleaning</h3>
    </div>
    <div class="card" style="background-image: url('{{ asset('images/popopnknkn.jpg') }}');">
      <h3>Detailing</h3>
    </div>
  </div>
  <div class="card-container">
    <div class="card" style="background-image: url('{{ asset('images/popopkm.jpeg') }}'); margin-top: 25px;">
      <h3>Coating</h3>
    </div>
    <div class="card" style="background-image: url('{{ asset('images/Car-Fogging.webp') }}');">
      <h3>Fogging</h3>
    </div>
  </div>
</div>

</body>
</html>
