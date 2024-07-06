@extends('layout.main')

@section('title', 'Transaksi')

@section('content')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Transaksi</h4>
                <p class="card-description">
                    Formulir Transaksi
                </p>
                <form method="POST" action="{{ route('transaksi.store')}}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama')}}" placeholder="Nama Pelanggan">
                        @error('nama')
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
                        <label for="service_id">Service</label>
                        <select name="service_id" id="service_id" class="form-control">
                            @foreach ($service as $item)
                                <option value="{{ $item['id'] }}" data-harga="{{ $item['harga'] }}">
                                    {{ $item['nama'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('service_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga Satuan</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" placeholder="Harga" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ url('transaksi')}}" class="btn btn-light">Batal</a>
                </form>
            </div>
        </div>
    </div>

    
    <script>
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
</script>
    @endsection