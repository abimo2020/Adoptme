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
      <form action="{{ route('admin.update', $item->id)}}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        {{-- jenis_kucing --}}

        <div class="form-group">
            <label for="jenis_hewan" class="form-control-label">Jenis Hewan</label>

            <br />

            <label>
                <input {{ $item->jenis_hewan == "Kucing" ? "checked" : "" }} type="radio" name="jenis_hewan" value="Kucing"
                    class="form-control @error('jenis_hewan') is-invalid @enderror" /> Kucing
            </label>

            &nbsp;

            <label>
                <input {{ $item->jenis_hewan == "Anjing" ? "checked" : "" }} type="radio" name="jenis_hewan" value="Anjing"
                    class="form-control @error('jenis_hewan') is-invalid @enderror" /> Anjing
            </label>
            @error('jenis_hewan') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        {{-- jenis_hewan--}}
        <div class="form-group">
            <label for="ras">Ras</label>
            <input type="text" name="ras" value="{{ old('ras') ? old('ras') : $item->ras}}"
                class="form-control @error('ras') is-invalid  @enderror" id=" ras"
                placeholder="Ras hewan" required>
            @error('ras') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="usia">Usia</label>
            <input type="text" name="usia" value="{{ old('usia') ? old('usia') : $item->usia}}"
                class="form-control @error('usia') is-invalid  @enderror" id=" usia"
                placeholder="Usia hewan" required>
            @error('usia') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
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
        <div class="form-group">
            <label for="no_hp">No. Handphone</label>
            <input type="text" name="no_hp" value="{{ old('no_hp') ? old('no_hp') : $item->no_hp}}"
                class="form-control @error('no_hp') is-invalid  @enderror" id=" no_hp"
                placeholder="No. Handphone pemilik hewan" required>
            @error('no_hp') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" value="{{ old('alamat') ? old('alamat') : $item->alamat}}"
                class="form-control @error('alamat') is-invalid  @enderror" id=" alamat"
                placeholder="Alamat pemilik hewan" required>
            @error('alamat') <div class="text-muted">{{ $message }}</div> @enderror
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
          <label for="adopted" class="form-control-label">Adopsi</label>

          <br />

          <label>
              <input {{ $item->adopted == "1" ? "checked" : "" }} type="radio" name="adopted" value="1"
                  class="form-control @error('adopted') is-invalid @enderror" /> Sudah
          </label>

          &nbsp;

          <label>
              <input {{ $item->adopted == "0" ? "checked" : "" }} type="radio" name="adopted" value="0"
                  class="form-control @error('adopted') is-invalid @enderror" /> Belum
          </label>
          @error('adopted') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="allowed" class="form-control-label">Disetujui</label>

            <br />

            <label>
                <input {{ $item->allowed == "1" ? "checked" : "" }} type="radio" name="allowed" value="1"
                    class="form-control @error('allowed') is-invalid @enderror" /> Sudah
            </label>

            &nbsp;

            <label>
                <input {{ $item->allowed == "0" ? "checked" : "" }} type="radio" name="allowed" value="0"
                    class="form-control @error('allowed') is-invalid @enderror" /> Belum
            </label>
            @error('allowed') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="nama_adopter">nama Adopter</label>
            <input type="text" name="nama_adopter" value="{{ old('nama_adopter') ? old('nama_adopter') : $item->nama_adopter}}"
                class="form-control @error('nama_adopter') is-invalid  @enderror" id=" nama_adopter"
                placeholder="Masukkan nama Adopter">
            @error('nama_adopter') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
          <div class="form-group">
            <label for="no_hp_adopter">No. Handphone Adopter</label>
            <input type="text" name="no_hp_adopter" value="{{ old('no_hp_adopter') ? old('no_hp_adopter') : $item->no_hp_adopter}}"
                class="form-control @error('no_hp_adopter') is-invalid  @enderror" id=" no_hp_adopter"
                placeholder="No. Handphone adopter">
            @error('no_hp_adopter') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
        <div class="form-group">
            <label for="alamat_adopter">Alamat Adopter</label>
            <input type="text" name="alamat_adopter" value="{{ old('alamat_adopter') ? old('alamat_adopter') : $item->alamat_adopter}}"
                class="form-control @error('alamat_adopter') is-invalid  @enderror" id=" alamat_adopter"
                placeholder="Masukkan Alamat Adopter">
            @error('alamat_adopter') <div class="text-muted">{{ $message }}</div> @enderror
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
