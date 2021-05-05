@extends('layouts.admin_default')


@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah Data Kucing</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-warning">Tambah Data Kucing</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.store')}}" method="POST">
        @csrf
        {{-- jenis_kucing --}}
        <div class="form-group">
          <label for="jenis_kucing">Jenis Kucing</label>
          <input 
            type="text"
            name="jenis_kucing" 
            value="{{ old('jenis_kucing') }}"
            class="form-control @error('jenis_kucing') is-invalid  @enderror" 
            id=" jenis_kucing"
            placeholder="Masukkan Jenis Kucing" required>
            @error('jenis_kucing') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        {{-- jenis_kelamin--}}
        <div class="form-group">
          <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label>

          <br/>

          <label>
              <input 
                  type="radio"
                  name="jenis_kelamin" 
                  value="Jantan"
                  class="form-control @error('jenis_kelamin') is-invalid @enderror"/> Jantan
          </label>

          &nbsp;

          <label>
              <input
                  type="radio" 
                  name="jenis_kelamin"                           
                  value="Betina" 
                  class="form-control @error('jenis_kelamin') is-invalid @enderror" /> Betina
          </label>
          @error('jenis_kelamin') <div class="text-muted">{{ $message }}</div> @enderror
      </div>
      {{-- deskripsi --}}
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea 
            name="deskripsi"
            class="form-control @error('deskripsi') is-invalid @enderror"
            id="deskripsi"
            rows="5" required>
            {{ old('deskripsi') }}
          </textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="mt-5 btn btn-primary btn-block">Next</button>
        </div>

      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection