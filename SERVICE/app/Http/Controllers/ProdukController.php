<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index')
                ->with('produk', $produk);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'nama' => "required", 
            'harga' => "required"
        ]);

        // simpan tabel 
        Produk::create($val);

        // // radirect ke halaman list fakultas
        return redirect()->route('produk.index')->with('success', 'Produk berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit')->with('produk',$produk);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        // Validate the request data
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);
    
        // Find the product by ID
        $produk = Produk::findOrFail($id);
    
        // Update the product details
        $produk->nama = $request->input('nama');
        $produk->harga = $request->input('harga');
        
        // Save the updated product
        $produk->save();
    
        // Redirect back to the product index with a success message
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diupdate');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete(); // hapus data mahasiswa
        return redirect()->route('produk.index')->with('success',' Data berhasil dihapus.');
    }
}

