@extends('layouts.user_default')

@section('content')
{{-- <div class="body__kucing">
    <div class="bg">
        <figure class="snip0057 red hover">
          <figcaption>
            <h2>Detail <span>kucing</span></h2>
            <p>{{ $item->jenis_kucing }}</p>
            <p>{{ $item->deskripsi }}</p>
            <div class="icons"><a href="#"><i class="ion-ios-home"></i></a><a href="#"><i class="ion-ios-email"></i></a><a href="#"><i class="ion-ios-telephone"></i></a></div>
          </figcaption>
          <div class="image"><img src="{{ $item->galleries()->where('kucing_id', '=' , $item->id)->first()->photo }}" alt="sample4"/></div>
          <div class="position">
          <a href="#" class="btn btn-primary adopt">adopt me</a>
          <a href="/" class="btn btn-primary adopt"> | kembali</a>
          </div>
        </figure>
        </div>
</div> --}}

<!-- Start Volunteer-form Area -->
<section class="Volunteer-form-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-20">Detail Kucing</h1>
                </div>
                <div style="display: flex; justify-content: center; align-items: center">
                    <div class="image" style="border-radius: 15px"><img src="/home_image/{{-- $item->id --}}" alt="sample4"/></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <form class="col-lg-9" {{--action="{{ route('homeKucing', $item->id)}}"--}} method="POST">
                @csrf
                <div class="form-group">
                    <label for="first-name">Jenis Kucing</label>
                    <input
                    disabled
                        type="text"
                        name="jenis_kucing"
                        {{--value="{{ $item->jenis_kucing }}"--}}
                        class="form-control"
                        placeholder="Jenis Kucing">
                </div>
                {{-- jenis_kelamin--}}
                <div class="form-group">
                    <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label>

                    <br/>

                    <label>
                        <input disabled {{-- $item->jenis_kelamin == "Jantan" ? "checked" : "" --}} type="radio" name="jenis_kelamin" value="Jantan"
                            class="form-control/> Jantan
                    </label>

                    &nbsp;

                    <label>
                        <input disabled {{-- $item->jenis_kelamin == "Betina" ? "checked" : "" --}} type="radio" name="jenis_kelamin" value="Betina"
                            class="form-control /> Betina
                    </label>
                </div>

                {{-- adopted --}}
                <div class="form-group">
                <label for="is_adopted" class="form-control-label">Adopsi ? </label>
                <br />

                <label>
                    <input {{-- $item->is_adopted == "1" ? "checked" : "" --}} type="radio" name="is_adopted" value="1"
                    class="form-control" />saya bersedia
                </label>
                    &nbsp;

                {{-- <label>
                    <input {{ $item->is_adopted == "0" ? "checked" : "" }} type="radio" name="is_adopted" value="0"
                        class="form-control @error('is_adopted') is-invalid @enderror" /> Belum Adopsi
                </label> --}}
                    {{-- @error('is_adopted') <div class="text-muted">{{ $message }}</div> @enderror --}}
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input
                    disabled
                        type="text"
                        value="{{-- $item->deskripsi --}}"
                        class="form-control"
                        placeholder="Jenis Kucing">
                </div>

                <div style="display: flex; justify-content: flex-end">
                    {{-- <button style="padding: 5px 15px" type="submit" class="btn btn-info">simpan</button> --}}
                    <a href="/" class="btn adopt">kembali</a>
                    <a href="/" class="btn adopt">simpan</a>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
