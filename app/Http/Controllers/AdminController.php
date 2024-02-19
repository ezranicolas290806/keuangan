<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Layanan;
use App\Models\Pengeluaran;

class AdminController extends Controller
{
    // Menampilkan daftar pembayaran
    public function indexPembayaran()
    {
        $pembayaran = Pembayaran::all();
        return view('admin.dashboard', compact('pembayaran'));
    }

    // Menampilkan formulir tambah pembayaran
    public function createPembayaran()
    {
        return view('admin.pembayaran.create');
    }

    // Menyimpan data pembayaran baru
    public function storePembayaran(Request $request)
    {
        // Validasi data dari $request

        // Simpan data ke database menggunakan model Pembayaran

        // Redirect atau tampilkan pesan sukses
    }

    // Menampilkan formulir edit pembayaran
    public function editPembayaran($id)
    {
        $pembayaran = Pembayaran::find($id);
        return view('admin.pembayaran.edit', compact('pembayaran'));
    }

    // Menyimpan perubahan pada data pembayaran
    public function updatePembayaran(Request $request, $id)
    {
        // Validasi data dari $request

        // Update data pembayaran dengan $id menggunakan model Pembayaran

        // Redirect atau tampilkan pesan sukses
    }

    // Menghapus data pembayaran
    public function destroyPembayaran($id)
    {
        // Hapus data pembayaran dengan $id menggunakan model Pembayaran

        // Redirect atau tampilkan pesan sukses
    }

    // Fungsi CRUD untuk Layanan dan Pengeluaran akan memiliki struktur yang serupa
    
    // ...fungsi-fungsi CRUD untuk Layanan...

    // ...fungsi-fungsi CRUD untuk Pengeluaran...
}
