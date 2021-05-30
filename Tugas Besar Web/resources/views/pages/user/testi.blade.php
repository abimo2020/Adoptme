@extends('layouts.user_default')

@section('content')
<!-- Start Volunteer-form Area -->
<section class="Volunteer-form-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-20">Testimonial</h1>
                    <p>Berikan testimoni anda terhadap Adoptme</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <form class="col-lg-9" method="POST" action="{{ route('user.storeTesti')}}">
                @csrf
                <div class="form-group">
                    <label for="sebagai">Sebagai</label>
                    <input type="text" id="sebagai"name="sebagai" value="{{ old('sebagai') }}" class="form-control" placeholder="cth. Pecinta Hewan, Pendonor Kucing, Pecinta Anjing">@error('sebagai') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="testimoni">Testimoni</label>
                    <textarea name="testimoni" class="form-control @error('testimoni') is-invalid @enderror" id="testimoni" rows="5"placeholder="Tuliskan testimoni anda">
                    {{old('testimoni')}}
                    </textarea>
                    @error('testimoni') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="primary-btn float-right">Simpan</button>
            </form>
        </div>
    </div>
</section>
<!-- End Volunteer-form Area -->
@endsection
