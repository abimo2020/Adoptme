@extends('layouts.admin_default')


@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit Data Kucing</h1>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-warning">Edit Data Kucing</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.update', $item->id)}}" method="POST">
        @method('put')
        @csrf
        {{-- jenis_kucing --}}
        <div class="form-group">
          <label for="jenis_kucing">Jenis Kucing</label>
          <input type="text" name="jenis_kucing" value="{{ old('jenis_kucing') ? old('jenis_kucing') : $item->jenis_kucing}}"
              class="form-control @error('jenis_kucing') is-invalid  @enderror" id=" jenis_kucing"
              placeholder="Masukkan Jenis Kucing" required>
          @error('jenis_kucing') <div class="text-muted">{{ $message }}</div> @enderror
        </div>

        {{-- jenis_kelamin--}}
        <div class="form-group">
          <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label>

          <br />

          <label>
              <input {{ $item->jenis_kelamin == "Jantan" ? "checked" : "" }} type="radio" name="jenis_kelamin" value="Jantan"
                  class="form-control @error('jenis_kelamin') is-invalid @enderror" /> Jantan
          </label>

          &nbsp;

          <label>
              <input {{ $item->jenis_kelamin == "Betina" ? "checked" : "" }} type="radio" name="jenis_kelamin" value="Betina"
                  class="form-control @error('jenis_kelamin') is-invalid @enderror" /> Betina
          </label>
          @error('jenis_kelamin') <div class="text-muted">{{ $message }}</div> @enderror
        </div>

        {{-- deskripsi --}}
        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="5"
              required>
            {{ old('deskripsi') ? old('deskripsi') : $item->deskripsi}}
          </textarea>
        </div>

        {{-- adopted --}}
        <div class="form-group">
          <label for="is_adopted" class="form-control-label">Adopsi</label>

          <br />

          <label>
              <input {{ $item->is_adopted == "1" ? "checked" : "" }} type="radio" name="is_adopted" value="1"
                  class="form-control @error('is_adopted') is-invalid @enderror" /> Sudah Adopsi
          </label>

          &nbsp;

          <label>
              <input {{ $item->is_adopted == "0" ? "checked" : "" }} type="radio" name="is_adopted" value="0"
                  class="form-control @error('is_adopted') is-invalid @enderror" /> Belum Adopsi
          </label>
          @error('is_adopted') <div class="text-muted">{{ $message }}</div> @enderror
        </div>

        {{-- approve --}}
        <div class="form-group">
          <label for="is_approved" class="form-control-label">Approval</label>

          <br />

          <label>
              <input {{ $item->is_approved == "1" ? "checked" : "" }} type="radio" name="is_approved" value="1"
                  class="form-control @error('is_approved') is-invalid @enderror" /> Setujui
          </label>

          &nbsp;

          <label>
              <input {{ $item->is_approved == "0" ? "checked" : "" }} type="radio" name="is_approved" value="0"
                  class="form-control @error('is_approved') is-invalid @enderror" /> Tidak Setujui
          </label>
          @error('is_approved') <div class="text-muted">{{ $message }}</div> @enderror
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