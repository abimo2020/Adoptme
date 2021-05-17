@extends('layouts.user_default')

@section('content')
<!-- Start Volunteer-form Area -->
<section class="Volunteer-form-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-20">Detail Hewan</h1>
                </div>
                <div style="display: flex; justify-content: center; align-items: center">
                    <div class="image" style="border-radius: 15px"><img src="{{asset('storage/'.$item->foto)}}" alt="sample4"/></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <form class="col-lg-9" action="{{ route('user.adopted', $item->id)}}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="first-name">Jenis Hewan</label>
                    <input
                    disabled
                        type="text"
                        name="jenis_hewan"
                        value="{{ $item->jenis_hewan }}"
                        class="form-control"
                        placeholder="Jenis Hewan">
                </div>
                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input
                    disabled
                        type="text"
                        name="usia"
                        value="{{ $item->usia }}"
                        class="form-control"
                        placeholder="Jenis Hewan" id="usia">
                </div>
                {{-- jenis_kelamin--}}
                <div class="form-group">
                    <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label>
                    <br/>
                    <label>
                        <input disabled {{$item->jenis_kelamin == "Jantan" ? "checked" : "" }} type="radio" name="jenis_kelamin" value="Jantan"
                            class="form-control"/> Jantan
                    </label>
                    &nbsp;
                    <label>
                        <input disabled {{$item->jenis_kelamin == "Betina" ? "checked" : "" }} type="radio" name="jenis_kelamin" value="Betina"
                            class="form-control" /> Betina
                    </label>
                </div>
                <div class="form-group">
                    <label for="ras">Ras</label>
                    <input
                    disabled
                        type="text"
                        name="ras"
                        value="{{ $item->ras }}"
                        class="form-control"
                        placeholder="Ras" id="ras">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input
                    disabled
                        type="text"
                        name="alamat"
                        value="{{ $item->alamat }}"
                        class="form-control"
                        placeholder="alamat" id="alamat">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input
                    disabled
                        type="text"
                        value="{{ $item->deskripsi }}"
                        class="form-control"
                        placeholder="Jenis Kucing">
                </div>
                <div class="form-group">
                <label for="adopted" class="form-control-label">Apakah anda bersedia untuk mengadopsi ?</label><br>
                <label>
                    <input {{ $item->adopted == "1" ? "checked" : "" }} type="radio" name="adopted" value="1"
                    class="form-control" />Saya bersedia
                </label>
                {{-- <label>
                    <input {{ $item->is_adopted == "0" ? "checked" : "" }} type="radio" name="is_adopted" value="0"
                        class="form-control @error('is_adopted') is-invalid @enderror" /> Belum Adopsi
                </label> --}}
                    {{-- @error('is_adopted') <div class="text-muted">{{ $message }}</div> @enderror --}}
                </div>



                <div style="display: flex; justify-content: flex-end">
                    <button style="padding: 5px 15px" type="submit" class="btn btn-info">Adopsi</button>
                    <a href="/" class="btn adopt">kembali</a>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
