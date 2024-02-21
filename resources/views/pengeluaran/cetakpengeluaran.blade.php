@extends('layouts.app')
@section('title.cetak pengeluaran')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center"><h2 class="font-weight-bold">Cetak Laporan</h2></div>

                <div class="card-body">
                    <form action="" method="GET">
                        @csrf
                        <div class="form-group">
                            <label for="report_type">Jenis Laporan:</label>
                            <select class="form-control" id="report_type" name="report_type" required>
                                <option value="income">Pemasukan</option>
                                <option value="expense">Pengeluaran</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="margin-top:20px; ">Cetak</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection