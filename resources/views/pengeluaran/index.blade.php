@extends('layouts.app')

@section('title', 'Pengeluaran')

@section('content')



<div class="" style=" margin-left: 285px; margin-top:20px;">
    <h4 style="color: #137FA3;">Laporan Pengeluaran</h4>
    <div class="">
        <a class="btn mb-1" style="background-color: #137FA3; color: white; float: right; margin-right:30px;" target="_blank" href="{{ url('/pengeluaran/create') }}">
            Buat Transaksi</a>
            <br><br>
        <a class="btn mb-5" style="background-color: #137FA3; color: white; float: right; margin-right:88px;" target="_blank" href="{{ url('/pengeluaran/cetakpengeluaran') }}">
        Cetak</a>
        
        <div class="card mt-2" style="width:77vw;">
            
            <div class="card-body">
                <table class="table table-bordered table-hovered DataTable" style="width: 73vw;">
                    <thead>
                        <tr class="text-center">
                            <th>NO</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Jumlah</th>
                            <th>Foto Struk</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php   
                        $no = 1;
                    ?>

                        <tr>
                            <td class="col-1"></td>
                            <td class="col-1"></td>
                            <td class="col-1"></td>
                            <td class="col-1"></td>
                            <td class="col-1"></td>

                            <td class="col-1"> <a href="">
                                <button class="btn btn-primary ">Edit</button>
                                </a>
                                <form action="" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

