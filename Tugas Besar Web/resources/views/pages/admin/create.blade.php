
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
            <div class="form-group">
                <label for="kode_hewan">Kode Hewan</label>
                <input type="text" id="kode_hewan"name="kode_hewan" value="{{ old('kode_hewan') }}" class="form-control" placeholder="Isi Kode Hewan">@error('kode_hewan') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="jenis_hewan" class="form-control-label">Jenis Hewan</label><br/>
                <label>
                    <input type="radio" name="jenis_hewan" value="Kucing" class="form-control @error('jenis_hewan') is-invalid @enderror"/> Kucing
                </label>&nbsp;
                <label>
                    <input type="radio" name="jenis_hewan" value="Anjing" class="form-control @error('jenis_hewan') is-invalid @enderror" /> Anjing
                </label>
                @error('jenis_hewan') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="ras">Ras</label>
                <input type="text" id="ras"name="ras" value="{{ old('ras') }}" class="form-control" placeholder="Isi Ras Hewan">@error('ras') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="usia">Usia</label>
                <input type="text" id="usia"name="usia" value="{{ old('usia') }}" class="form-control" placeholder="Isi Usia dalam Bulan">@error('usia') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label><br/>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Jantan" class="form-control @error('jenis_kelamin') is-invalid @enderror"/> Jantan
                </label>&nbsp;
                <label>
                    <input type="radio" name="jenis_kelamin" value="Betina" class="form-control @error('jenis_kelamin') is-invalid @enderror" /> Betina
                </label>
                @error('jenis_kelamin') <div class="text-muted">{{ $message }}</div> @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="5"placeholder="Tuliskan alamat">
                </textarea>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="5"placeholder="Tuliskan deskripsi hewan">
                </textarea>
            </div>
            <div class="form-group">
                <div class="row">
                 <label class="col-md-4">Pilih Foto</label>
                 <div class="col-md-8">
                  <input type="file" name="foto" />
                 </div>
                </div>
               </div>
            <button type="submit" class="primary-btn float-right">Simpan</button>
        </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection
