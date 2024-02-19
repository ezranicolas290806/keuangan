<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class LayananController extends Controller
{
    // Menampilkan semua layanan
    public function index()
    {
        $layanan = Service::all();
        return response()->json(['layanan' => $layanan], 200);
    }

    // Menampilkan detail layanan berdasarkan ID
    public function show($id)
    {
        $layanan = Layanan::find($id);
        if (!$service) {
            return response()->json(['message' => 'Service not found'], 404);
        }
        return response()->json(['layanan' => $layanan], 200);
    }

    // Menambahkan layanan baru
    public function store(Request $request)
    {
        $layanan = Layanan::create($request->all());
        return response()->json(['message' => 'Layanan added successfully', 'layanan' => $layanan], 201);
    }

    // Memperbarui layanan berdasarkan ID
    public function update(Request $request, $id)
    {
        $layanan = Layanan::find($id);
        if (!$layanan) {
            return response()->json(['message' => 'Layanan not found'], 404);
        }
        $layanan->update($request->all());
        return response()->json(['message' => 'Layanan updated successfully', 'layanan' => $layanan], 200);
    }

    // Menghapus layanan berdasarkan ID
    public function destroy($id)
    {
        $layanan = Layanan::find($id);
        if (!$layanan) {
            return response()->json(['message' => 'Layanan not found'], 404);
        }
        $service->delete();
        return response()->json(['message' => 'Layanan deleted successfully'], 200);
    }
}

