@extends('layouts.app')

@section('title', 'Pemasukan')

@section('content')



<div class="" style=" margin-left: 285px; margin-top:20px;">
    <h4 style="color: #137FA3;">Laporan Pemasukan</h4>
    <div class="">
        <a class="btn mb-1" style="background-color: #137FA3; color: white; float: right; margin-right:30px;" target="_blank" href="{{ url('pemasukan/create') }}">
            Buat Transaksi</a>
            <br><br>
        <a class="btn mb-5" style="background-color: #137FA3; color: white; float: right; margin-right:88px;" target="_blank" href="{{ url('/pemasukan/cetakpemasukan') }}">
        Cetak</a>
        
        <div class="card mt-2" style="width:77vw;">
            
            <div class="card-body">
                <table class="table table-bordered table-hovered DataTable" style="width: 73vw;">
                    <thead>
                        <tr class="text-center ">
                            <th>NO</th>
                            <th>Tanggal</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Foto Struk</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php   
                        $no = 1;
                    ?>
                            @foreach ($pemasukan as $pm)
                                
                        <tr  style="vertical-align: middle; font-size: 17px;" idPM={{ $pm->id_pemasukan }}>
                            <td class="col-1" style="text-align: center;"> {{ $no++ }} </td>
                                <td class="col-2" style="text-align: center">
                                    {{ \Carbon\Carbon::parse($pm->tanggal)->format('j F Y') }}
                                </td>
                                <td class="col-2 text-capitalize text-center "> {{ $pm->deskripsi }} </td>
                                <td class="col-1 text-capitalize text-center "> {{ $pm->harga }} </td>
                                <td class="col-1" style="text-align: center">
                                    @if ($pm->foto_struk)
                                        <img src="{{ asset('storage/' . $pm->foto_struk) }}" alt="Foto Struk"
                                            style="width: 90px; height: 90px;" class="rounded-circle object-fit-cover ">
                                    @else
                                        <i class="bi bi-person-circle" style="font-size: 40px;"></i>
                                    @endif
                                </td>

                            <td class="col-2"> <a href="{{ url('pemasukan/edit') }}">
                                <button class="btn btn-primary ">Edit</button>
                                </a>
                                    @csrf
                                    <a class="hapusBtn" style="cursor: pointer" idPM={{ $pm->id_pemasukan }}>
                                        <button type="submit" class="btn btn-danger" >Hapus</button>
                                    </a>
                            </td>

                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
  