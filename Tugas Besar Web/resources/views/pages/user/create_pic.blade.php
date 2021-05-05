@extends('layouts.user_default')

@section('content')
<!-- Start Volunteer-form Area -->
<section class="Volunteer-form-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-20">Want to help? Become a Volunteer</h1>
                    <p>satu langkah lagi anda jadi pahlawan kucing sejati</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <form action="{{ route('home.store_pic')}}" method="POST" enctype="multipart/form-data">
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
</section>
<!-- End Volunteer-form Area -->
@endsection
