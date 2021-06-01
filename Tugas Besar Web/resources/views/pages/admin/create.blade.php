
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
        <form class="col-lg-9" method="POST" action="{{ route('admin.store')}}" enctype="multipart/form-data" >
            @csrf
            {{-- <div class="form-group">
                <label for="kode_hewan">Kode Hewan</label>
                <input type="text" id="kode_hewan"name="kode_hewan" value="{{ old('kode_hewan') }}" class="form-control" placeholder="Isi Kode Hewan">@error('kode_hewan') <div class="text-muted">{{ $message }}</div> @enderror
            </div> --}}
            <div class="form-group">
                <label for="jenis_hewan" class="form-control-label">Jenis Hewan</label><br/>
                <label>
                    <input type="radio" name="jenis_hewan" value="Kucing" class="form-control @error('jenis_hewan') is-invalid @enderror" {{ old('jenis_hewan')=='Kucing' ? 'checked': '' }}/> Kucing
                </label>&nbsp;
                <label>
                    <input type="radio" name="jenis_hewan" value="Anjing" class="form-control @error('jenis_hewan') is-invalid @enderror" {{ old('jenis_hewan')=='Anjing' ? 'checked': '' }}/> Anjing
                </label>
                @error('jenis_hewan') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="ras">Ras</label>
                <input type="text" id="ras"name="ras" value="{{ old('ras') }}" class="form-control" placeholder="Kampung, persia, anggora, dll">@error('ras') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="usia">Usia</label>
                <input type="text" id="usia"name="usia" value="{{ old('usia') }}" class="form-control" placeholder="Usia dalam bulan">@error('usia') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label><br/>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Jantan" class="form-control @error('jenis_kelamin') is-invalid @enderror" {{ old('jenis_kelamin')=='Jantan' ? 'checked': '' }}/> Jantan
                </label>&nbsp;
                <label>
                    <input type="radio" name="jenis_kelamin" value="Betina" class="form-control @error('jenis_kelamin') is-invalid @enderror" {{ old('jenis_kelamin')=='Betina' ? 'checked': '' }} /> Betina
                </label>
                @error('jenis_kelamin') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="no_hp">No. Handphone</label>
                <input type="text" id="no_hp"name="no_hp" value="{{ old('no_hp') }}" class="form-control" placeholder="No. Handphone pemilik/penemu hewan">@error('no_hp') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="5"placeholder="Kota dan provinsi wajib ditulis"></textarea>
                @error('alamat') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="5"placeholder="Tuliskan deskripsi hewan anda"></textarea>
                @error('deskripsi') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <div class="row">
                 <label class="col-md-4">Pilih Foto</label>
                 <div class="col-md-8">
                  <input type="file" name="foto" />
                 </div>
                </div>
               </div>
               <div class="form-group">
                <label for="allowed" class="form-control-label">Diizinkan</label><br/>
                <label>
                    <input type="radio" name="allowed" value="1" class="form-control @error('allowed') is-invalid @enderror"/> Sudah
                </label>&nbsp;
                <label>
                    <input type="radio" name="allowed" value="0" class="form-control @error('allowed') is-invalid @enderror" /> belum
                </label>
                @error('allowed') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <button type="submit" class="primary-btn float-right">Simpan</button>
        </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection
