@extends('layout.main')

@section('title','Pengantaran')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pengantaran</h4>
                  <p class="card-description">
                    Add class <code> Pengantaran</code>
                  </p>
                  <a href="{{route('pengantaran.create')}}" class="btn btn-rounded btn-primary">Buat Formulir</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>No Telp</th>
                          <th>Tanggal</th>
                          <th>Transaksi</th>
                          @can('create', App\Transaksi::class)
                          <th>Status</th>
                          <th>Actions</th>
                          @endcan
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pengantaran as $item)
                        <tr>
                            <td>{{$item ["nama"]}}</td>
                            <td>{{$item ["alamat"]}}</td>
                            <td>{{$item ["no_telp"]}}</td>
                            <td>{{$item["tanggal"]}}</td>
                            <td>{{$item["transaksi"]["nama"]}}</td>
                            <td>{{$item["status"]}}</td>
                            <td>
                            <a href="{{ route('pengantaran.edit', $item['id']) }}" class="btn btn-sm btn-rounded btn-warning">Ubah</a>
                                <form action="{{ route('pengantaran.destroy', $item['id']) }}" method="post" style="display: inline-block;">
                                    @method('DELETE')
                                    @csrf
                                    @can('delete', $item) {{-- Ubah 'create' menjadi 'delete' sesuai dengan kebijakan Anda --}}
                                    <button type="submit" class="btn btn-sm btn-rounded btn-danger show_confirm" data-name="{{ $item['nama'] }}">Hapus</button>
                                    @endcan
                                </form>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
<script>
  Swal.fire({
      title: "Good job!",
      text: "{{ session('success') }}",
      icon: "success"
  });
</script>
@endif

{{-- confirm dialog --}}
<script type="text/javascript">
  $('.show_confirm').click(function(event) {
      let form = $(this).closest("form");
      let name = $(this).data("name");
      event.preventDefault();
      Swal.fire({
          title: "Apakah yakin mau menghapus data " + name + "?",
          text: "Setelah dihapus, data tidak bisa dikembalikan!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "YA, Hapus!"
      }).then((result) => {
          if (result.isConfirmed) {
              form.submit();
          }
      });
  });
</script>
@endsection