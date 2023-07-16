<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Produk::with('kategori', 'gambar')->get();
        return view('produk.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rowKategori = Kategori::all();
        $rowGambar = Gambar::all();
        return view('produk.create', compact('rowKategori', 'rowGambar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Produk::create([
            'produk_nama' => $request->produk_nama,
            'produk_jumlah' => $request->produk_jumlah,
            'produk_harga' => $request->produk_harga,
            'produk_id_gambar' => $request->produk_id_gambar,
            'produk_id_kategori' => $request->produk_id_kategori
        ]);

        return redirect('produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Produk::findOrFail($id);
        $rowKategori = Kategori::all();
        $rowGambar = Gambar::all();
        return view('produk.edit', compact('row', 'rowKategori', 'rowGambar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Produk::findOrFail($id);
        $row->update([
            'produk_nama' => $request->produk_nama,
            'produk_jumlah' => $request->produk_jumlah,
            'produk_harga' => $request->produk_harga,
            'produk_id_gambar' => $request->produk_id_gambar,
            'produk_id_kategori' => $request->produk_id_kategori
        ]);

        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Produk::findOrFail($id);
        $row->delete();

        return redirect('produk');
    }
}
