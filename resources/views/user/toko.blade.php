@extends('layouts.app')

@section('title', 'Spirit Of Majapahit | Toko Oleh - oleh')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1><strong>Info Oleh - oleh</strong></h1>
                    <span class="subheading" style="color: #ff8811;">Rekomendasi toko oleh - oleh yang dapat anda
                        kunjungi</span>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                @if ($galeri->count() > 0)
                    @foreach ($galeri as $g)
                        @if ($g->is_show == 'yes')
                            <div class="col-md-4 ftco-animate">
                                <div class="blog-entry align-self-stretch">
                                    <div class="img text-center">
                                        <img src="{{ $g->nama_galeri }}" style="border-radius:5%;" alt="/" height="200"
                                            width="300">
                                    </div>
                                    <div class="text mt-3">
                                        <h3 class="heading text-center"><a href="#">{{ $g->nama_lokasi }}</a></h3>
                                    </div>
                                    <p class="text-center"><a href="{{ route('detail.toko', ['id' => $g->id_lokasi]) }}"
                                            class="btn btn-primary">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        @elseif($g->is_show == null)
                            <div class="col-md-4 ftco-animate">
                                <div class="blog-entry align-self-stretch">
                                    <div class="img text-center">
                                        <img src="https://hesolutions.com.pk/wp-content/uploads/2019/01/picture-not-available.jpg"
                                            style="border-radius:5%;" alt="/" height="200" width="300">
                                    </div>
                                    <div class="text mt-3">
                                        <h3 class="heading text-center"><a href="#">{{ $g->nama_lokasi }}</a></h3>
                                    </div>
                                    <p class="text-center"><a href="{{ route('detail.toko', ['id' => $g->id_lokasi]) }}"
                                            class="btn btn-primary">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @else
                    <div class="text mt-3">
                        <h3 class="heading text-center"><a href="#" style="color: #ff8811;">Belum ada data</a></h3>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
