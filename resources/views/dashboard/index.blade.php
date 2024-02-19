@extends('layouts.app')

@section('title', 'Pemasukan')

@section('content')
<div class="row">
<div class="card" style="width: 14rem; margin-left:350px; margin-top:100px;">
    <a href="/pegawai/pemasukan" class="text-decoration-none text-dark">
        <div class="card-body d-flex ">
            <h5 class="card-text me-2">Laporan</h5> <h5 class="card-text" style="color: #137FA3;">Pemasukan</h5>
        </div>
    </a>
</div>
<div class="card" style="width: 14rem; margin-left:50px; margin-top:100px;">
    <a href="/pegawai/pengeluaran" class="text-decoration-none text-dark">
        <div class="card-body d-flex ">
            <h5 class="card-text me-2">Laporan</h5> <h5 class="card-text" style="color: #137FA3;">Pengeluaran</h5>
        </div>
    </a>
</div>
</div>



@endsection