@extends('layout.main')

@section('title', 'Edit Produk')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Produk</h4>
                <p class="card-description">
                    Edit Produk
                </p>
                <form method="POST" action="{{ route('produk.update', $produk->id) }}" class="forms-sample">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Jenis Barang</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama', $produk->nama) }}" placeholder="Jenis Barang">
                        @error('nama')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Satuan</label>
                        <input type="number" class="form-control" name="harga" value="{{ old('harga', $produk->harga) }}" placeholder="Harga Satuan">
                        @error('harga')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <a href="{{ url('produk') }}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
