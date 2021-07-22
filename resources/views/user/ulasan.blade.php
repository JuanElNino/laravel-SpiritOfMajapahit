@extends('layouts.app')

@section('title', 'Spirit Of Majapahit | Tambah Ulasan')

@section('content')
    <br>
    <div class="login">
        <div class="container">
            <div class="login-grids">
                <div class="col-md-8 log">
                    <h1>Ulasan</h1><br>
                    <div class="strip"></div>
                    <h2>Tambahkan ulasan mengenai {{ $lokasi->nama_lokasi }}</h2>
                    <form action="{{ route('ulasan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="ulasan">Ulasan</label>
                            <input type="hidden" name="id_lokasi" value="{{ $lokasi->id_lokasi }}">
                            <textarea class="form-control" rows="4" type="text" name="ulasan" id="ulasan" placeholder="Masukkan Ulasan anda atau kosongi jika tidak perlu"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kritik">Kritik</label>
                            <textarea class="form-control" rows="4" type="text" name="kritik" id="kritik" placeholder="Masukkan Kritik anda atau kosongi jika tidak perlu"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label>
                            <div class="col-md-6">
                                <select name="rating" id="rating" class="form-control">
                                    <option>Berikan rating anda pada tempat ini</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input class="btn btn-success btn-block" type="submit" value="Tambah Ulasan">
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('detail.wisata', ['id' => $lokasi->id_lokasi]) }}" class="btn btn-info btn-block">Kembali</a>
                            </div>                            
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <br>
@endsection
