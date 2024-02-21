@extends('layouts.app')
@section('title','edit pemasukan')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span class="h1">
                    edit data pemasukan {{$pemasukan->nama}}
                </span>
            </div>
            <div class="card-body">
                <form method="POST" action="simpan">
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                        </div>
                        <p>
                            <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>No</label>
                                <input type="text" class="form-control" name="no" value="{{$pemasukan->no}}"/>
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" value="{{$pemasukan->tanggal}}"/>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" value="{{$pemasukan->deskripsi}}"/>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" class="form-control" name="harga" value="{{$pemasukan->harga}}"/>
                            </div>
                            <div class="form-group">
                                <label>Foto Struk</label>
                                <input type="file" class="form-control" name="foto_struk" value="{{$pemasukan->nama}}"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection