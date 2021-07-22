@extends('layouts.app')

@section('title', 'Spirit Of Majapahit | Travel')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1><strong>Info Travel</strong></h1>
                    <span class="subheading">Rekomendasi travel yang dapat anda gunakan</span>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                @if ($galeri->count() > 0)
                    @foreach ($galeri as $g)
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <div class="img text-center">
                                    <img src="{{ asset('storage/images/' . $g->nama_galeri) }}" style="border-radius:5%;"
                                        alt="/" height="200" width="300">
                                </div>
                                <div class="text mt-3">
                                    <h3 class="heading text-center"><a href="#">{{ $g->nama_lokasi }}</a></h3>
                                </div>
                                <p class="text-center"><a href="{{ route('detail.travel', ['id' => $g->id_lokasi]) }}"
                                        class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text mt-3">
                        <h3 class="heading text-center"><a href="#">Belum ada data</a></h3>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
