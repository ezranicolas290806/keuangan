<!DOCTYPE html>
<html lang="en">
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
        <div class="list-item logo">
          <a href="#">
            <img src="{{ asset('images/gambar2.jpeg') }}" alt="" class="icon" style="width:50px; height:70px;">
            <span class="description-header"></span>
          </a>
        </div>
      </div>
      <br>
      <br>
      <div class="main">
        <div class="nav-item">
          <a href="#" style="color: #ffffff;">
            <img src="{{ asset('images/grid.png') }}" alt="" class="icon"  style="width:40px; height:30px;">
            <span class="description">Dashboard</span>
          </a>
        </div>
      </div>
      <br>
      <br>
      <div class="main">
        <div class="nav-item">
          <a href="#"style="color: #ffffff;">
            <img src="{{ asset('images/settings.png') }}" alt="" class="icon"  style="width:40px; height:30px;">
            <span class="description">Layanan</span>
          </a>
        </div>
    </div>
<br>
<br>
    <div class="main">
        <div class="nav-item">
          <a href="#"style="color: #ffffff;">
            <img src="{{ asset('images/buy.png') }}" alt="" class="icon"  style="width:40px; height:30px;">
            <span class="description">Pembayaran</span>
          </a>
        </div>
    </div>
    <br>
    <br>
    <div class="main">
        <div class="nav-item">
          <a href="#"style="color: #ffffff;">
            <img src="{{ asset('images/shopping.png') }}" alt="" class="icon"  style="width:40px; height:30px;">
            <span class="description">Pengeluaran</span>
          </a>
        </div>
    </div>

  </div>
</body>
</html>