@extends('layout.main')

@section('title', 'Buat Layanan')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Buat Layanan</h4>
            <form method="POST" action="{{ route('service.store') }}" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Pelanggan:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama pelanggan" required>
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="produk_id">Pilih Produk:</label>
                    <select class="form-control" id="produk_id" name="produk_id" required>
                        @foreach($produks as $produk)
                            <option value="{{ $produk->id }}">{{ $produk->nama }} - {{ $produk->harga }}</option>
                        @endforeach
                    </select>
                    @error('produk_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan:</label>
                    <textarea class="form-control" id="keluhan" name="keluhan" rows="3" placeholder="Masukkan keluhan pelanggan" required>{{ old('keluhan') }}</textarea>
                    @error('keluhan')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <a href="{{ route('service.index') }}" class="btn btn-light">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
