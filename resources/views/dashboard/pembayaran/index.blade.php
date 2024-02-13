@extends('layout.app')
@section('title','Pembayaran')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    Pembayaran
                </span>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <a href="/jenis-surat/surat/tambah">
                            <btn class="btn btn-success">Tambah</btn>
                        </a>

                    </div>
                    <p>
                        <hr>
                        <table class="table table-hover table-bordered DataTable">
                            <thead>
                                <tr>
                                    <th>Tambah Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pembayaran as $p)
                                <tr>
                                    <td>{{$p->pembayaran}}</td>
                                    <td>
                                        <a href="pembayaran/edit/{{$p->id_pembayaran}}"><btn class="btn btn-primary">EDIT</btn></a>
                                        <a href="pembayaran/hapus/{{$p->id_pembayaran}}"><btn class="btn btn-danger">HAPUS</btn></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection