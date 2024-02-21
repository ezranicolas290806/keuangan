<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss','resources/js/app.js'])
  <title>Document</title>
</head>
<body>
    <style>
        .card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around; /* Mengatur posisi kartu agar merata */
    margin-top: 20px;
  }
  
  .card {
    background-color: #f0f0f0;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 10px; /* Mengatur jarak antar kartu */
    width: 200px; /* Mengatur lebar kartu */
    height: 250px; /* Mengatur tinggi kartu */
  }
    </style>
<nav class="navbar" style="background-color: #00BFFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/bkaso.png" style="widht: 80px; height:65px;" alt=""></a>
      <form class="d-flex" role="search">
        <button class="btn btn-danger" type="submit">Logout</button>
      </form>
    </div>
  </div>
</nav>

<div class="sidebar">
  <div class="logo d-flex">
    <img style="width:120px; height:110px; margin-top:-30px; display:flex;" src="{{ asset('images/bkaso.png') }}" alt="Logo">
    <span >Carwash</span>
    <br>
  </div>
  <ul class="sidebar-nav" style="color:black;">
    <li><a href="{{route('dashboardpm.index')}}"><img class="picture" src="{{ asset('images/grid.png') }}" alt="">Dashboard</a></li>
    <li><a href="{{route('layanan.index')}}"><img class="picture" src="{{ asset('images/settings.png') }}" alt="">Layanan</a></li>
    <li><a href="{{route('pemasukanpm.index')}}"><img class="picture" src="{{ asset('images/shopify.png') }}" alt="">Pemasukan</a></li>
    <li><a href="{{route('pengeluaranpm.index')}}"><img class="picture" src="{{ asset('images/shopping.png') }}" alt="">Pengeluaran</a></li>
  </ul>
</div>

<div class="right-section">
  <h2>Pengeluaran</h2>
  <div class="card-container">
    <div class="card">
    <h3>Pengeluaran</h3>
            <p>Tanggal: 20-02-2024</p>
            <p>Deskripsi: Pencucian kendaraan</p>
            <p>Jumlah: $500.000</p>
    </div>
    <div class="card">
    <h3>Pengeluaran</h3>
    <p>Tanggal: 21-02-2024</p>
            <p>Deskripsi: Pembelian keperluan Cucian</p>
            <p>Jumlah: $300.000</p>
    </div>
    <div class="card">
    <h3>Pengeluaran</h3>
    <p>Tanggal: 22-02-2024</p>
            <p>Deskripsi: Pembelian keperluan Cucian</p>
            <p>Jumlah: $200.000</p>
    </div>
    <div class="card">
    <h3>Pengeluaran</h3>
    <p>Tanggal: 23-02-2024</p>
            <p>Deskripsi: Pembelian keperluan Cucian</p>
            <p>Jumlah: $150.000</p>
    </div>
    <div class="card">
    <h3>Pengeluaran</h3>
    <p>Tanggal: 24-02-2024</p>
            <p>Deskripsi: Pembelian keperluan Cucian</p>
            <p>Jumlah: $300.000</p>
    </div>
    <div class="card">
    <h3>Pengeluaran</h3>
    <p>Tanggal: 25-02-2024</p>
            <p>Deskripsi: Pembelian keperluan Cucian</p>
            <p>Jumlah: $345.000</p>
    </div>
    <div class="card">
    <h3>Pengeluaran</h3>
    <p>Tanggal: 26-02-2024</p>
            <p>Deskripsi: Pembelian keperluan Cucian</p>
            <p>Jumlah: $456.000</p>
    </div>
    <div class="card">
    <h3>Pengeluaran</h3>
    <p>Tanggal: 27-02-2024</p>
            <p>Deskripsi: Pembelian keperluan Cucian</p>
            <p>Jumlah: $900.000</p>
    </div>
  </div>
  </div>
</div>
</body>
</html>