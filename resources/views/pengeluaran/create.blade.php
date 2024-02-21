@extends('layouts.app')
@section('title.buat transaksi')
@section('content')


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center"><h2 class="font-weight-bold">Buat Transaksi</h2></div>

                <div class="card-body">
                    <form action="{{route('pengeluaran/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="type">Tanggal:</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi:</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah:</label>
                            <input type="number" class="form-control"  id="jumlah" name="jumlah" required>
                        </div>
                        <div class="form-group">
                            <label for="foto_struk">Foto Struk:</label>
                            <input type="file" class="form-control-file mt-3" id="foto_struk" name="foto_struk" required>
                            <img id="img-preview" src="#" alt="Preview Gambar" style="max-width: 100%; margin-top: 10px; display: none;">
                        </div>
                        <div>
                        <button type="submit" class="btn  btn-primary" style="margin-top:20px;">Tambah Transaksi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.getElementById("image").addEventListener("change", function() {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById("img-preview").src = e.target.result;
            document.getElementById("img-preview").style.display = "block";
        };
        reader.readAsDataURL(this.files[0]);
    });
</script>
@endpush
    
@endsection
