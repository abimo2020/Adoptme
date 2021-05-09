@extends('layouts.user_default')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-8 col-md-12">
                <h1 class="text-uppercase">
                    Tolong adopsi kami. <br>
                    Kami butuh sedikit perhatian anda.
                </h1>
                <p class="text-white sub-head">
                    Kami akan membantu anda untuk menemukan kucing kesayangan anda
                </p>
                <a href="#cardCats" class="primary-btn header-btn text-uppercase">Find A Cat To Adopt</a>
                <a href="#fillDonatesCats" class="mt-3 primary-btn header-btn text-uppercase">Donate A Cat</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start callto-top Area -->
<section class="callto-top-area section-gap" id="fillDonatesCats">
    <div class="container">
        <div class="row justify-content-between align-items-center callto-top-wrap pt-40 pb-40 shadow-lg">
            <div class="col-lg-8 callto-top-left">
                <h1>Apakah kamu menemukan kucing malang ?</h1>
            </div>
            <div class="col-lg-4 callto-top-right">
                <a href="{{ route('user.create') }}" class="primary-btn" style="border-radius: 5px">tambahkan kucing</a>
            </div>
        </div>
    </div>
</section>
<!-- End callto-top Area -->

<!-- Start cat-list Area -->
<section class="cat-list-area section-gap" id="cardCats">
    <div class="container">
        <div class="row">
            {{-- @foreach ($items->where('is_approved', '1') as $item)--}}
            @foreach($items as $item)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3" style="display: flex; justify-content: center">

                <div class="card mt-4" style="width: 17rem;">
                    <img style="max-width: 100% ; max-height: 250px; background-size: cover" src="{{asset('storage/'.$item->foto)}}"   class="card-img-top">
                    <div class="listing__item__pic set-bg">
                        <div class="listing__item__pic__tag">{{ $item->adopted ? 'Adopted' : 'Available'  }}</div>
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
</section>
<!-- End cat-list Area -->

<!-- Start process Area -->
<section class="process-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Process to adopt a cat</h1>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-process" style="display: flex; flex-direction: column; align-items: center">
                    <span class="lnr lnr-thumbs-up"></span>
                    <h4>
                        Pet Selection
                    </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process" style="display: flex; flex-direction: column; align-items: center">
                    <span class="lnr lnr-user"></span>
                    <h4>
                        Meeting Authority
                    </h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process" style="display: flex; flex-direction: column; align-items: center">
                    <span class="lnr lnr-magic-wand"></span>
                    <h4>
                        Bring to new family
                    </h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End process Area -->

<!-- Start contact-page Area -->
<section class="process-area section-gap" id="contactUs">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Contact Us</h1
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-home"></span>
                    <h4>
                        Indonesia
                    </h4>
                    <p>
                        Muhammadiyah Yogyakarta University
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-phone-handset"></span>
                    <h4>
                        081221565331
                    </h4>
                    </a>
                    <p>
                        Monday to Friday 9 AM to 6 PM
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-process">
                    <span class="lnr lnr-envelope"></span>
                    <h4>
                        cathub@mail.co.id
                    </h4>
                    </a>
                    <p>
                        Send us your query anytime!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End process Area -->

<!-- Start About Us Area -->
<section class="testomial-area section-gap" id="testimonail">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Testimonial</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-testimonial-carusel">
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t1.png" alt="">
                    <p class="desc">
                        pecinta kucing
                    </p>
                    <h4>Ahmad Krido Novarianto</h4>
                    <p>
                        saya sangat senang bisa menemukan kucing saya disini
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t2.png" alt="">
                    <p class="desc">
                        pendonor kucing
                    </p>
                    <h4>Hary Prihadi</h4>
                    <p>
                        Dengan adanya cathub ini kucing-kucing mendapatkan seseorang yg tulus untuk merawatnya
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t3.png" alt="">
                    <p class="desc">
                        pendonor kucing
                    </p>
                    <h4>Muhammad Ardiansyah</h4>
                    <p>
                        saya menemukan kucing lalu kirim ke cathub dan responnnya baik
                    </p>
                </div>
                <div class="single-testimonial item">
                    <img class="mx-auto" src="img/t1.png" alt="">
                    <p class="desc">
                        pecinta kucing
                    </p>
                    <h4>Angga Wika Nugraha</h4>
                    <p>
                        kucing-kucing sangat banyak saya memilih kucing untuk dirawat dengan baik
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testomial Area -->

<!-- Start calltoaction Area -->
<section class="calltoaction-area section-gap relative">
    <div class="container">
        <div class="overlay overlay-bg"></div>
        <div class="row align-items-center justify-content-center">
            <h1 class="text-white">Want to help? Become a Volunteer</h1>
            <p class="text-white">
                Kita hidup dibumi ini tidak sepenuhnya hanya dengan manusia, kadang kala harus berbagi kehidupan dengan yang lain seperti hewan dan tumbuhan.
            </p>
        </div>
    </div>
</section>
<!-- End calltoaction Area -->
@endsection
