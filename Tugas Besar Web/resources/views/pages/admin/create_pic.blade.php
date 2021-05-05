@extends('layouts.admin_default')


@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah Data Kucing</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-warning">Tambah Foto Kucing</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('kucing-galleries.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
          <input 
          style="display:none"
            type="text"
            name="kucing_id" 
            value="{{ $kucing_id }}"
            id=" kucing_id"
            placeholder="Masukkan Jenis Kucing" required>
            @error('kucing_id') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        {{-- photo --}}
        <div class="form-group">
          <label for="photo">Photo</label>
          <input 
            type="file"
            name="photo" 
            value="{{ old('photo') }}"
            accept="image/*"
            class="form-control-file @error('photo') is-invalid @enderror"
            id="photo" required>
        </div>

        <div class="form-group">
          <button type="submit" class="mt-5 btn btn-primary btn-block">Submit</button>
        </div>

      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection