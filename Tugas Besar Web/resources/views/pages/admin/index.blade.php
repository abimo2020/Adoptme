@extends('layouts.admin_default')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Data Kucing</h1>
      <a href="{{ route('admin.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">+ Tambah Data Kucing</a>

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
                <th>Jenis Kucing</th>
                <th>Jenis Kelamin</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Approval</th>
                <th>Actions</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($items as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->jenis_kucing }}</td>
                  <td>{{ $item->jenis_kelamin }}</td>
                  <td>{{ $item->deskripsi }}</td>
                  <td>{{ $item->is_adopted ? 'Adopted' : 'Available' }}</td>
                  <td>{{ $item->is_approved ? 'Approved' : 'Not Approved' }}</td>
                  {{-- <td>
                    <img src="{{ $item->galleries()->where('kucing_id', '=' , $item->id)->first()->photo }}" alt="" width="30%">
                  </td> --}}
                  <td>
                    <div class="row justify-content-center">
                      <a href="{{ route('admin.edit', $item->id)}}" class="btn btn-info mx-3"><i class="fas fa-pencil-alt"
                          aria-hidden="true"></i>
                      </a>

                      <form action="{{ route('admin.destroy', $item->id) }}" method="POST"
                        class="d-inline">
                        @csrf
                        @method('delete')
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
