@extends('layouts.admin_default')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Hewan</h1>
      <a href="{{ route('admin.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Tambah Hewan</a>

    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-warning">Tabel Data Kucing</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kode Hewan</th>
                <th>Jenis Hewan</th>
                <th>Jenis Kelamin</th>
                <th>Ras</th>
                <th>Usia</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Alamat</th>
                <th>Foto</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($item as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $item->kode_hewan}}</td>
                  <td>{{ $item->jenis_hewan }}</td>
                  <td>{{ $item->jenis_kelamin }}</td>
                  <td>{{ $item->ras}}</td>
                  <td>{{ $item->usia}}</td>
                  <td>{{ $item->deskripsi }}</td>
                  <td>{{ $item->adopted ? 'Sudah diadopsi' : 'Belum diadopsi' }}</td>
                  <td>{{ $item->alamat}}</td>
                  <td>
                    <img src="{{asset('storage/'.$item->foto)}}" alt="" width="20%">
                  </td>
                  <td>
                    <div class="row justify-content-center">
                      <a href="{{ route('admin.edit',$item->id)}}" class="btn btn-info mx-3"><i class="fas fa-pencil-alt"
                          aria-hidden="true"></i>
                      </a>

                      <form action="{{route('admin.destroy',['item'=>$item->id])}}" method="POST"
                        class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
@endsection
