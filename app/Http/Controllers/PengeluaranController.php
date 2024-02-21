<?php

namespace App\Http\Controllers;
use App\Models\Pengeluaran;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class PengeluaranController extends Controller
{
    //
    public function index()
    {
        //
        $data = [
            'pengeluaran' => Pengeluaran::all()
        ];
        return view("pengeluaran.index", $data);
    }

    public function create()
    {
        //
        return view('pengeluaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => ['required', 'date'],
            'deskripsi' => ['required', 'string','max:1000'],
            'jumlah' => ['required', 'numeric'],
            'foto_struk' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'] // Pastikan validasi sesuai dengan kebutuhan
        ]);
        
        $imageName = time() . '.' . $request->foto_struk->getClientOriginalExtension();
        $request->foto_struk->storeAs('public/images',$imageName); // Perbaiki lokasi penyimpanan gambar

        pengeluaran::create([
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'jumlah' => $request->jumlah,
            'foto_struk' => $imageName
        ]);

        return redirect()->route('pengeluaran')->with('success');
    }

    public function cetakpengeluaran()
    {
        //
        $data = [
            'pengeluaran' => Pengeluaran::all()
        ];

        // return $data;

        return view('pengeluaran.cetakpengeluaran', $data);
    }

    public function edit(Request $request)
    {
        //
        $data = $request->validate([
            'tanggal' => ['required'],
            'deskripsi' => ['required'],
            'harga' => ['required']
        ]);

        $pengeluaran  = Pengeluaran::where('id_pengeluaran', $request->input('id_pengeluaran'))->first();
        $pengeluaran->fill($data);
        $pengeluaran->save();

        return redirect()->to('/pengeluaran')->with('success', 'pengeluaran Berhasil Diupdate');
    }

    public function delete(Pengeluaran $pengeluaran, Request $request)
    {
        $id = $request->id;

        $pengeluaran = Pengeluaran::where('id_pengeluaran', $id)->first();

        if($pengeluaran){
            $pengeluaran = Pengeluaran::where('id_pengeluaran', $pengeluaran->id_pengeluaran)->first();
            if($pengeluaran){
                $pengeluaran->delete();
            }
            $pesan = [
                'success' => true,
                'pesan' => 'Pegawai telah menghapus data'
            ];
        } else {
            $pesan = [
                'success' => false,
                'pesan' => 'Pegawai gagal menghapus data'
            ];
        }
        return response()->json($pesan);
    }


}
