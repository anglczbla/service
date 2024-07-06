@extends('layout.main')

@section('title', 'Pengantaran')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pengantaran</h4>
                <p class="card-description">
                    Formulir Pengantaran
                </p>
                <form method="POST" action="{{ route('pengantaran.store')}}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama')}}" placeholder="Nama Pelanggan">
                        @error('nama')
                            <span class="text-da
                            nger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ old('alamat')}}" placeholder="Alamat">
                        @error('alamat')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telp</label>
                        <input type="text" class="form-control" name="no_telp" value="{{ old('no_telp')}}" placeholder="No Telp">
                        @error('no_telp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="{{ old('tanggal')}}" placeholder="Tanggal">
                        @error('tanggal')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="transaksi_id">Transaksi</label>
                        <select name="transaksi_id" id="transaksi_id" class="form-control">
                            @foreach ($transaksi as $item)
                                <option value="{{ $item['id'] }}" data-harga="{{ $item['harga'] }}">
                                    {{ $item['nama'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('transaksi_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" name="status" value="{{ old('status')}}" placeholder="Status Pengiriman">
                        @error('status')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <a href="{{ url('transaksi')}}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>

    
    <!-- <script>
document.addEventListener('DOMContentLoaded', function () {
    const produkSelect = document.getElementById('service_id');
    const hargaInput = document.getElementById('harga');

    produkSelect.addEventListener('change', function () {

        const selectedOption = produkSelect.options[produkSelect.selectedIndex];
        const selectedPrice = selectedOption.getAttribute('data-harga');
        console.log(selectedPrice);
        hargaInput.value = selectedPrice; // Mengatur nilai input harga
    });

    // Trigger change event to set initial value
    produkSelect.dispatchEvent(new Event('change'));
});
</script> -->
    @endsection