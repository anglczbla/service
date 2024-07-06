@extends('layout.main')

@section('title', 'Edit Layanan')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit Layanan</h4>
            <form method="POST" action="{{ route('service.update', $service->id) }}" class="forms-sample">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $service->nama }}" placeholder="Nama">
                </div>
                <div class="form-group">
                    <label for="produk_id">Barang</label>
                    <select class="form-control" id="produk_id" name="produk_id">
                        @foreach($produks as $produk)
                            <option value="{{ $produk->id }}" {{ $service->produk_id == $produk->id ? 'selected' : '' }}>{{ $produk->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="keluhan">Keluhan</label>
                    <textarea class="form-control" id="keluhan" name="keluhan" rows="4" placeholder="Keluhan">{{ $service->keluhan }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <a href="{{ route('service.index') }}" class="btn btn-light">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
