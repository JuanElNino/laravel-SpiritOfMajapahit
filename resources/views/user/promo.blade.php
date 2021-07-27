@extends('layouts.app')

@section('title', 'Spirit Of Majapahit | Promo')

@section('content')
    @if ($banner->count() > 0)
        <div class="hero-wrap js-fullheight">
            <div class="home-slider owl-carousel js-fullheight">
                @foreach ($banner as $b)
                    <div class="slider-item js-fullheight"
                        style="background-image:url('{{ $b->img_promo }}');">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row no-gutters slider-text align-items-center">
                                <div class="col-md-8 ftco-animate">
                                    <div class="text w-100">
                                        <h1 class="mb-4 color-black"><strong>{{ $b->nama_promo }}</strong></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1><strong>Promo</strong></h1>
                    <span class="subheading" style="color: #ff8811;">Daftar promo yang ada di kota kami</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    @if ($promo->count() > 0)
                        @foreach ($promo as $p)
                            <div class="blog-entry align-self-stretch">
                                <a href="{{ route('detail.promo', ['id' => $p->id_promo]) }}">
                                    <img src="{{ $p->img_promo }}" alt="{{ $p->nama_promo }}" class="block-20 rounded img-2">
                                </a>
                                <div class="text mt-3">
                                    <h2 class="heading">
                                        <a href="#">{{ $p->nama_promo }}</a>
                                    </h2>
                                    <p><a href="{{ route('detail.promo', ['id' => $p->id_promo]) }}" class="btn btn-primary">Lihat Selengkapnya</a></p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h2 class="heading">Belum ada data</h2>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
