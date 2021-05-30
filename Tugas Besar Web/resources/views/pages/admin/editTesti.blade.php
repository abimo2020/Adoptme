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
      <form action="{{ route('upTest', $testi->id)}}" method="POST">
        @method('PATCH')
        @csrf
        {{-- jenis_kucing --}}

        {{-- jenis_hewan--}}
        <input type="hidden" name="nama" value="{{$testi->nama}}">
        <input type="hidden" name="alamat_adopter" value="{{$testi->sebagai}}">
        <input type="hidden" name="no_hp_adopter" value="{{$testi->testimoni}}">
        <div class="form-group">
            <label for="allowed" class="form-control-label">Disetujui</label>

            <br />

            <label>
                <input {{ $testi->allowed == "1" ? "checked" : "" }} type="radio" name="allowed" value="1"
                    class="form-control @error('allowed') is-invalid @enderror" /> Sudah
            </label>

            &nbsp;

            <label>
                <input {{ $testi->allowed == "0" ? "checked" : "" }} type="radio" name="allowed" value="0"
                    class="form-control @error('allowed') is-invalid @enderror" /> Belum
            </label>
            @error('allowed') <div class="text-muted">{{ $message }}</div> @enderror
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
