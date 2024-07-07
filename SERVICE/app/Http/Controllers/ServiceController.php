<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Produk;

class ServiceController extends Controller
{
    
    public function index()
    {
        if(auth()->user()->role == 'P'){
            $service = Service::where('user_id', auth()->user()->id)->get();
        }else{
            $service = Service::all();
        }
        return view('service.index', compact('service'));
    }

    public function create()
    {
        $produks = Produk::all();
        return view('service.create', compact('produks'));
    }

    public function store(Request $request)
    {
        if ($request->user()->cannot('create',Service::class)){
            abort(403);
        }
        $request->validate([
            'nama' => 'required',
            'tipe_barang'=>'required',
            'keluhan' => 'required',
            'produk_id' => 'required|exists:produks,id',
        ]);

        Service::create($request->all());

        return redirect()->route('service.index')->with('success', 'Service berhasil ditambahkan');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $produks = Produk::all();
        return view('service.edit', compact('service', 'produks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'tipe_barang' => 'required',
            'keluhan' => 'required',
            'produk_id' => 'required|exists:produks,id',
        ]);

        $service = Service::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('service.index')->with('success', 'Service berhasil diperbarui');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('service.index')->with('success', 'Service berhasil dihapus');
    }
}
