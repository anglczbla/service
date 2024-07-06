@extends('layout.main')

@section('title','Produk')

@section('content')
<div class="row">
    {{-- formulirtambah fakultas --}}
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Produk</h4>
            <p class="card-description">
              Tambah Produk
            </p>
            <form method="POST" action="{{ route('produk.store')}}" class ="forms-sample">
            @csrf
            <div class="form-group">
                <label for="nama">Jenis Barang</label>
                <input type="text" class="form-control" name="nama" value="{{ old('nama')}}" placeholder="jenis">
                @Error('nama')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="harga">Harga Satuan</label>
                <input type="integer" class="form-control" name="harga" value="{{ old('harga')}}" placeholder="Harga">
                @Error('harga')
                    <span class="text-danger">{{$message}}</span>
                @enderror
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{ url('produk')}}" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
      </div>
</div>
@endsection