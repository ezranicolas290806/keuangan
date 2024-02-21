<?php

namespace App\Http\Controllers;
use App\Models\Pemasukan;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class PemasukanController extends Controller
{
    //
    public function index()
    {
        //
        $data = [
            'pemasukan' => Pemasukan::all()
        ];
        return view("Pemasukan.index", $data);
    }

    public function create()
    {
        //
        return view('pemasukan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => ['required', 'date'],
            'deskripsi' => ['required', 'string','max:1000'],
            'harga' => ['required', 'numeric'],
            'foto_struk' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'] // Pastikan validasi sesuai dengan kebutuhan
        ]);
        
        $imageName = time() . '.' . $request->foto_struk->getClientOriginalExtension();
        $request->foto_struk->storeAs('public/images',$imageName); // Perbaiki lokasi penyimpanan gambar

        pemasukan::create([
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto_struk' => $imageName
        ]);

        return redirect()->route('pemasukan')->with('success');
    }

    public function cetakpemasukan()
    {
        //
        $data = [
            'pemasukan' => Pemasukan::all()
        ];

        // return $data;

        return view('pemasukan.cetakpemasukan', $data);
    }

    public function edit(Request $request)
    {
        //
        $data = $request->validate([
            'tanggal' => ['required'],
            'deskripsi' => ['required'],
            'harga' => ['required']
        ]);

        $pemasukan = Pemasukan::where('id_pemasukan', $request->input('id_pemasukan'))->first();
        $pemasukan->fill($data);
        $pemasukan->save();

        return redirect()->to('/pemasukan')->with('success', 'pemasukan Berhasil Diupdate');
    }

    public function delete(Pemasukan $pemasukan, Request $request)
    {
        $id = $request->id;

        $pemasukan = Pemasukan::where('id_pemasukan', $id)->first();

        if($pemasukan){
            $pemasukan = Pemasukan::where('id_pemasukan', $pemasukan->id_pemasukan)->first();
            if($pemasukan){
                $pemasukan->delete();
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
