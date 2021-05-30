@extends('layouts.user_default')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-8 col-md-12">
                <h1 class="text-uppercase">
                    AdoptMe membantu <br>
                    Kucing dan Anjing untuk
                    menemukan rumahnya.
                </h1>
                <p class="text-white sub-head">
                    Kami akan membantu anda untuk menemukan Kucing atau Anjing kesayangan anda
                </p>
                @auth
                <a href="#daftarHewan" class="primary-btn header-btn text-uppercase" >Adopsi Hewan</a>
                <a href="{{route('user.create')}}" class="mt-3 primary-btn header-btn text-uppercase">Donasi Hewan</a>
                @endauth
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start callto-top Area -->
@auth
<section class="callto-top-area section-gap" id="fillDonatesCats">
    <div class="container">
        <div class="row justify-content-between align-items-center callto-top-wrap pt-40 pb-40 shadow-lg">
            <div class="col-lg-8 callto-top-left">
                <h1>Apakah kamu menemukan kucing atau anjing di dekat anda?</h1>
            </div>
            <div class="col-lg-4 callto-top-right">
                <a href="{{ route('user.create') }}" class="primary-btn" style="border-radius: 5px">Donasi Hewan</a>
            </div>
        </div>
    </div>
</section>
<!-- End callto-top Area -->

<!-- Start cat-list Area -->

    <section class="cat-list-area section-gap" id="daftarHewan">
    <div class="container">
        <div class="row">
            @foreach ($items->where('allowed', '1') as $item)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3" style="display: flex; justify-content: center">

                <div class="card mt-4" style="width: 17rem;">
                    <img style="max-width: 100% ; max-height: 250px; background-size: cover" src="{{asset('storage/'.$item->foto)}}"   class="card-img-top">
                    <div class="listing__item__pic set-bg">
                        <div class="listing__item__pic__tag">{{ $item->adopted ? 'Sudah Diadopsi' : 'Tersedia'  }}</div>
                    </div>
                    <div class="card-body" style="display: flex; flex-direction: column; justify-content: space-between">
                        <div>
                            <h4 class="card-title">{{ $item->ras }}</h4>
                            <hr/>
                            <h6 class="card-title">{{ $item->jenis_kelamin }}</h6>

                            <p class="card-text" style="font-size: 13px">{{ $item->deskripsi }}</p>
                        </div>
                        <a href="{{route('user.show',$item->id)}}" class="listing__item__text__info__right">
                        Lihat Detail
                    </a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="pagination justify-content-center">
        {{$items->links()}}
    </div>
</section>
@endauth
<!-- End cat-list Area -->
<!-- Start About Us Area -->
<section class="testomial-area section-gap" id="testimonail">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Testimoni</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial-carusel">
                @foreach ($testi->where('allowed','1') as $testi)
                <div class="single-testimonial item">

                    <p class="desc">
                        {{$testi->sebagai}}
                    </p>
                    <h4>{{$testi->nama}}</h4>
                    <p>
                        {{$testi->testimoni}}
                    </p>
                </div>
                @endforeach
                {{-- <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t2.png" alt="">
                    <p class="desc">
                        Pendonor Kucing
                    </p>
                    <h4>Soleh Solihun</h4>
                    <p>
                        Dengan adanya adoptme ini kucing-kucing mendapatkan seseorang yg tulus untuk merawatnya
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t3.png" alt="">
                    <p class="desc">
                        Pendonor Anjing
                    </p>
                    <h4>Kholif Dilah</h4>
                    <p>
                        Saya menemukan anjing lalu kirim ke adoptme dan responnnya baik
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t1.png" alt="">
                    <p class="desc">
                        Pecinta Hewan
                    </p>
                    <h4>Angga Wika Nugraha</h4>
                    <p>
                        Saya mendapatkan kucing dan anjing disini dan masih saya rawat hingga saat ini
                    </p>
                </div> --}}
            </div>
        </div>
        @auth
        <div class="row justify-content-center">
            <a href="{{ route('user.testi') }}" class="primary-btn" style="border-radius: 5px">Berikan testimoni</a>
        </div>
        @endauth
    </div>
</section>
<!-- Start process Area -->
<section class="process-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center" >
            <div class="menu-content pb-60 col-lg-8" >
                <div class="title text-center" >
                    <h1 class="mb-10" >Proses untuk mengadopsi :</h1>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-process" style="display: flex; flex-direction: column; align-items: center">
                   <a data-toggle="modal"> <span class="lnr lnr-thumbs-up" ></span></a>
                    <h4>
                        Memilih hewan
                    </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process" style="display: flex; flex-direction: column; align-items: center">
                    <span class="lnr lnr-user"></span>
                    <h4>
                        Bertemu pemilik
                    </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process" style="display: flex; flex-direction: column; align-items: center">
                    <span class="lnr lnr-magic-wand"></span>
                    <h4>
                        Jadikan keluargamu
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End process Area -->

<!-- Start contact-page Area -->
{{-- <section class="process-area section-gap" id="contactUs">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-process" style="display: flex; flex-direction: column; align-items: center">
                    <span class="lnr lnr-home"></span>
                    <h4>
                        Indonesia
                    </h4>
                    <p>
                        Universitas Negeri Malang
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process" style="display: flex; flex-direction: column; align-items: center">
                    <span class="lnr lnr-phone-handset"></span>
                    <h4>
                        0895360053889
                    </h4>
                    </a>
                    <p>
                        Monday to Friday 9 AM to 6 PM
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process" style="display: flex; flex-direction: column; align-items: center">
                    <span class="lnr lnr-envelope"></span>
                    <h4>
                        adoptme@gmail.com
                    </h4>
                    </a>
                    <p>
                        Send us your query anytime!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End process Area -->


<!-- End testomial Area -->
<section>
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Anda Perlu <b>Login</b> Untuk Melihat dan Memilih Hewan</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button> --}}
</section>

<!-- Start calltoaction Area -->
<section class="calltoaction-area section-gap relative">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row align-items-center justify-content-center">
            <h1 class="text-white">Ingin membantu? Jadilah seorang relawan</h1>
            <p class="text-white">
                Kita hidup dibumi ini tidak sepenuhnya hanya dengan manusia, kadang kala harus berbagi kehidupan dengan yang lain seperti hewan dan tumbuhan.
            </p>
        </div>
    </div>
</section>
<!-- End calltoaction Area -->
@endsection
