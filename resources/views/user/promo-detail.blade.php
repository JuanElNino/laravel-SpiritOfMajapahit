@extends('layouts.app')

@section('title', 'Spirit Of Majapahit | Detail Promo')

@section('content')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1><strong>Detail Promo</strong></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <p>
                        <img src="{{ $promo->img_promo }}" alt="{{ $promo->nama_promo }}" class="img-fluid">
                    </p>
                    <h2 class="mb-3">{{ $promo->nama_promo }}</h2>
                    <p style="text-align: justify">{!! $promo->desc_promo !!}</p>
                    <div class="col-lg-3 ml-auto">
                        <a href="{{ route('promo') }}" class="btn btn-primary btn-block">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
