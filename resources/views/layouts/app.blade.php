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
<nav class="navbar" style="background-color: #00BFFF;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="images/bkaso.png" style="widht: 80px; height:65px;" alt=""></a>
      <form class="d-flex" role="search">
        <button class="btn btn-danger" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 <div class="sidebar">
  <div class="logo d-flex">
    <img style="width:120px; height:110px; margin-top:-30px; display:flex;" src="images/bkaso.png" alt="Logo">
    <span >Carwash</span>
    <br>
  </div>
  <ul class="sidebar-nav" style="color:black;">
    <li><a href="#"><img class="picture" src="images/grid.png" alt="">Dashboard</a></li>
    <li><a href="#"><img class="picture" src="images/settings.png" alt="">Layanan</a></li>
    <li><a href="#"><img class="picture" src="images/shopify.png" alt="">Pemasukan</a></li>
    <li><a href="#"><img class="picture" src="images/shopping.png" alt="">Pengeluaran</a></li>
  </ul>
</div>




</body>
</html>