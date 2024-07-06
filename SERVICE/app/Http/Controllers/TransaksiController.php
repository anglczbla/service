<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Service;
use App\Models\Produk;


class TransaksiController extends Controller
{
    public function index()
    {
        // if(auth()->user()->role == 'P'){
        //     $transaksi = Transaksi::where('user_id', auth()->user()->id)->get();
        // }else{
        //     $transaksi = Transaksi::all();
        // }
        // return view('transaksi.index')
        //         ->with('transaksi', $transaksi);
        $transaksi = Transaksi::with('service')->get();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::all();
        return view('transaksi.create')->with('produk',$produk);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        if ($request->user()->cannot('create',Transaksi::class)){
            abort(403);
        }
        $val = $request->validate([
            'nama' => "required",
            'tanggal' => "required",
            'service_id' => "required",
            'harga' => "required"
        ]);

        // simpan tabel prodi
        Transaksi::create($val);

        // radirect ke halaman list prodi
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil disimpan,Barang akan kami ambil dan kami perbaiki,maksimal perbaikan 3 hari pengerjaan untuk pembayaran silakan kirim ke no rekening 88993344 ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $produk = Produk::all();
        return view('transaksi.edit', compact('transaksi', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validasi data input
    $request->validate([
        'nama' => 'required|string|max:255',
        'tanggal' => 'required|integer|min:1',
        'service_id' => 'required|exists:produks,id',
        'harga' => 'required|numeric|min:0',
    ]);

    // Cari data transaksi berdasarkan ID
    $transaksi = Transaksi::findOrFail($id);

    // Update detail transaksi
    $transaksi->nama = $request->nama;
    $transaksi->tanggal = $request->tanggal;
    $transaksi->service_id = $request->service_id;
    $transaksi->harga = $request->harga;

    // Simpan perubahan
    $transaksi->save();

    // Redirect kembali ke halaman transaksi dengan pesan sukses
    return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diupdate');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete(); // hapus data mahasiswa
        return redirect()->route('transaksi.index')->with('success',' Data berhasil dihapus.');
    }

}
