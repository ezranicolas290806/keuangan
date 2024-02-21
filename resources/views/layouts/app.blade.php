<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>

<body>
    <nav class="navbar" style="background-color: #00BFFF;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/bkaso.png')}}" style="widht: 80px; height:65px;"
                    alt=""></a>
            <form class="d-flex" action="{{ route('logout') }}" method="POST">
             @csrf
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <div class="sidebar">
        <div class="logo d-flex">
            <img style="width:120px; height:120px; margin-top:-30px; display:flex;" src="{{ asset('images/bkaso.png')}}"
                alt="Logo">
            <span>Queen Carwash</span>
            <br>
        </div>
        <ul class="sidebar-nav" style="color:rgb(255, 255, 255);">
            <li><a href="{{url('/pegawai/pemasukan')}}"><img class="picture" src="{{ asset('images/shopify.png') }}"
                        alt="">Pemasukan</a></li>
            <li><a href="{{url('/pegawai/pengeluaran')}}"><img class="picture"
                        src="{{ asset('images/shopping.png') }}" alt="">Pengeluaran</a></li>
        </ul>
    </div>

    <div class="container">

    </div>
    @yield('content')



</body>

</html>
