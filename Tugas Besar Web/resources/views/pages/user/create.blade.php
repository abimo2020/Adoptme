@extends('layouts.user_default')

@section('content')
<!-- Start Volunteer-form Area -->
<section class="Volunteer-form-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-20">Want to help? Become a Volunteer</h1>
                    <p>Terimakasih untuk perduli kepada kucing, lanjutkan isi untuk kemaslahatan kehidupan kucing</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <form class="col-lg-9" method="POST" action="{{ route('user.storeCreate')}}" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label for="jenis_hewan" class="form-control-label">Jenis Hewan</label><br/>
                    <label>
                        <input type="radio" name="jenis_hewan" value="Kucing" class="form-control @error('jenis_hewan') is-invalid @enderror"{{ old('jenis_hewan')=='Kucing' ? 'checked': '' }}/> Kucing
                    </label>&nbsp;
                    <label>
                        <input type="radio" name="jenis_hewan" value="Anjing" class="form-control @error('jenis_hewan') is-invalid @enderror" {{ old('jenis_hewan')=='Anjing' ? 'checked': '' }}/> Anjing
                    </label>
                    @error('jenis_hewan') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="ras">Ras</label>
                    <input type="text" id="ras"name="ras" value="{{ old('ras') }}" class="form-control" placeholder="Ras Hewan">@error('ras') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input type="text" id="usia"name="usia" value="{{ old('usia') }}" class="form-control" placeholder="Usia">@error('usia') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin" class="form-control-label">Jenis Kelamin</label><br/>
                    <label>
                        <input type="radio" name="jenis_kelamin" value="Jantan" class="form-control @error('jenis_kelamin') is-invalid @enderror" {{ old('jenis_kelamin')=='Jantan' ? 'checked': '' }}/> Jantan
                    </label>&nbsp;
                    <label>
                        <input type="radio" name="jenis_kelamin" value="Betina" class="form-control @error('jenis_kelamin') is-invalid @enderror" {{ old('jenis_kelamin')=='Betina' ? 'checked': '' }}/> Betina
                    </label>
                    @error('jenis_kelamin') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="5"placeholder="Tuliskan deskripsi hewan">
                    {{old('deskripsi')}}

                    </textarea>@error('deskripsi') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <div class="row">
                     <label class="col-md-4" for="foto">Pilih Foto</label>
                     <div class="col-md-8">
                      <input type="file" name="foto" id="foto"/>
                      @error('foto')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                     </div>
                    </div>
                   </div>
                <button type="submit" class="primary-btn float-right">Simpan</button>
            </form>
        </div>
    </div>
</section>
<!-- End Volunteer-form Area -->
@endsection
