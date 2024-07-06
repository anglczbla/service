<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'nama' => 'required', 
            'harga' => 'required'
        ]);

        Produk::create($val);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil disimpan');
    }

    public function show(Produk $produk)
    {
        // Implementasi jika diperlukan
    }

    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->nama = $request->input('nama');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diupdate');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Data berhasil dihapus.');
    }
}
