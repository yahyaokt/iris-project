<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_barang' => 'required|string|max:10|unique:barang,id_barang',
            'nama_barang' => 'required|string|max:100',
            'harga' => 'required|integer',
            'deskripsi' => 'required|string|max:255',
        ]);

        $barang = Barang::create([
            'id_barang' => $validated['id_barang'],
            'nama_barang' => $validated['nama_barang'],
            'harga' => $validated['harga'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect()->route('warehouse.home')->with('success', 'Barang berhasil ditambahkan dan ditambahkan ke penyimpanan');
    }
}