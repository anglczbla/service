<?php

namespace App\Http\Controllers;

use App\Models\Pengantaran; // Sesuaikan dengan model Pengantaran Anda
use App\Models\Transaksi; // Sesuaikan dengan model Transaksi Anda
use App\Models\Service; // Sesuaikan dengan model Service Anda
use Illuminate\Http\Request;

class PengantaranController extends Controller
{
    public function index()
    {
        // // Tampilkan pengantaran terkait dengan transaksi yang dimiliki oleh user
        // if (auth()->user()->role == 'P') {
        //     $pengantaran = Pengantaran::whereHas('transaksi', function ($query) {
        //         $query->where('user_id', auth()->user()->id);
        //     })->get();
        // } else {
        //     $pengantaran = Pengantaran::with('transaksi')->get();
        // }

        return view('pengantaran.index')->with('pengantaran', $pengantaran);
    }

    public function create()
    {
        $transaksi = Transaksi::all();
        $service = Service::all();

        return view('pengantaran.create', compact('transaksi', 'service'));
    }

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'transaksi_id' => 'required|exists:transaksis,id',
            'tanggal' => 'required|date',
            'status' => 'required|string',
        ]);

        // Buat pengantaran baru
        Pengantaran::create([
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'transaksi_id' => $request->transaksi_id,
            'tanggal' => $request->tanggal,
            'status' => $request->status,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pengantaran.index')->with('success', 'Pengantaran berhasil disimpan');
    }

    public function edit($id)
    {
        $pengantaran = Pengantaran::findOrFail($id);
        $transaksi = Transaksi::all();
        $service = Service::all();

        return view('pengantaran.edit', compact('pengantaran', 'transaksi', 'service'));
    }

    public function update(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required',
            'transaksi_id' => 'required|exists:transaksis,id',
            'tanggal' => 'required|date',
            'status' => 'required|string',
        ]);

        // Cari pengantaran berdasarkan ID
        $pengantaran = Pengantaran::findOrFail($id);

        // Update data pengantaran
        $pengantaran->nama = $request->nama;
        $pengantaran->alamat = $request->status;
        $pengantaran->no_telp = $request->no_telp;
        $pengantaran->transaksi_id = $request->transaksi_id;
        $pengantaran->tanggal = $request->tanggal;
        $pengantaran->status = $request->status;

        // Simpan perubahan
        $pengantaran->save();

        // Redirect kembali ke halaman pengantaran dengan pesan sukses
        return redirect()->route('pengantaran.index')->with('success', 'Pengantaran berhasil diupdate');
    }

    public function destroy($id)
    {
        // Cari pengantaran berdasarkan ID dan hapus
        $pengantaran = Pengantaran::findOrFail($id);
        $pengantaran->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('pengantaran.index')->with('success', 'Pengantaran berhasil dihapus');
    }
}
