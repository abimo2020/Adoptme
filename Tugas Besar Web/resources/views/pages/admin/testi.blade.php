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
                <th>Nama</th>
                <th>Sebagai</th>
                <th>Testimoni</th>
                <th>Diterima</th>
            </thead>
            <tbody>
              @foreach ($item as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $item->nama}}</td>
                  <td>{{ $item->sebagai }}</td>
                  <td>{{ $item->testimoni }}</td>
                  <td>{{ $item->allowed ? 'Sudah' : 'Belum' }}</td>
                  <td>

                    <div class="row justify-content-center">
                      <a href="{{ route('editTesti',$item->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"
                          aria-hidden="true"></i>
                      </a>
                      </div>

                    <div class="row justify-content-center">
                        <form action="{{route('updateTesti',['testi'=>$item->id])}}" method="post">
                            @method('PATCH')
                            @csrf
                        <button class="btn btn-success btn-sm">
                            <i class="fas fa-check"></i>
                        </button>
                    </form>
                      </div>
                      <div class="row justify-content-center">
                      <form action="{{route('deleteTesti',['testi'=>$item->id])}}" method="POST"
                        class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data ini?')">
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
