@extends('layouts.app')

@section('title', 'Spirit Of Majapahit | Detail Hotel')

@section('content')
    <br><br>
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container">
            <div class="row no-gutters">
              <div class="col-md-6 p-md-5 img img-2 mt-5 mt-md-0">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            @if ( !$tampil == null )        
                                @if( $tampil->nama_galeri == null)
                                    <img src="https://hesolutions.com.pk/wp-content/uploads/2019/01/picture-not-available.jpg" class="d-block w-100" alt="First Slide">
                                @else
                                    <img src="{{ $tampil->nama_galeri }}" class="d-block w-100" alt="First Slide">
                                @endif
                            @else
                                <img src="https://hesolutions.com.pk/wp-content/uploads/2019/01/picture-not-available.jpg" class="d-block w-100" alt="First Slide">
                            @endif                          
                        </div>
                        @if ($galeri->count() > 0)     
                            @foreach ($galeri as $g)
                                <div class="carousel-item">
                                    <img src="{{ $g->nama_galeri }}" class="d-block w-100" alt="First Slide">
                                </div>
                            @endforeach
                        @else
                            <div class="carousel-item">
                                <img src="https://hesolutions.com.pk/wp-content/uploads/2019/01/picture-not-available.jpg" class="d-block w-100" alt="First Slide">
                            </div>
                        @endif
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-custom-icon" aria-hidden="true">
                            <i class="fa fa-chevron-left"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-custom-icon" aria-hidden="true">
                            <i class="fa fa-chevron-right"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="heading-section">
                    <div class="pl-md-5">
                        <span class="subheading mb-2" style="color: #ff8811;">
                            <br>
                            @php
                                $average = $ulasan->avg('rating');
                            @endphp
                            Rating Lokasi :
                            @if ($ulasan->count() == 0)
                                Belum ada rating
                            @else
                                @for ($i = 0; $i < $average; $i++)
                                    <i class="fa fa-star"></i>
                                 @endfor
                            ({{ $average }}/5)
                            @endif
                        </span>
                    </div>
                </div>
            </div>
                <div class="col-md-6 wrap-about py-4 py-md-5 ftco-animate">
                    <div class="heading-section">
                        <div class="pl-md-5">
                            <h2>{{ $hotel->nama_lokasi }}</h2>
                        </div>
                    </div>
                    <div class="pl-md-5">
                        <p>{{ $hotel->ket_lokasi }}</p>
                    </div>
                    <div class="heading-section">
                        <div class="pl-md-5">
                            <p style="text-align: justify">{!! $hotel->desc_lokasi !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters align-items-center justify-content-center">
                {!! $hotel->maps_lokasi !!}       
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Ulasan</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="">
                        @foreach ($ulasan as $u)
                            <div class="item">
                                <div class="testimony-wrap d-flex">
                                    <div class="text pl-4">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="fa fa-quote-left"></i>
                                        </span>
                                        <p>Ulasan : </p>
                                        @if ($u->ulasan == null)
                                            <p style="text-align: justify">Belum ada</p>
                                        @else
                                            <p style="text-align: justify">{{ $u->ulasan }}</p>
                                        @endif
                                        <p>Kritik : </p>
                                        @if ($u->kritik == null)
                                            <p style="text-align: justify">Belum ada</p>
                                        @else
                                            <p style="text-align: justify">{{ $u->kritik }}</p>
                                        @endif
                                        <p class="name">{{ $u->nama }}</p>
                                        <span class="position" style="color: #ff8811;">
                                            Rating Lokasi :
                                            @for ($i = 0; $i < $u->rating; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-3 heading-section text-center ftco-animate">
                    @guest
                        <h2><a href="{{ route('login') }}" class="btn btn-success btn-block">Tambah Ulasan</a></h2>
                    @else
                        <h2><a href="{{ route('ulasan', ['id' => $hotel->id_lokasi]) }}" class="btn btn-success btn-block">Tambah Ulasan</a></h2>
                    @endguest
                </div>
            </div>
        </div>
    </section>
@endsection
