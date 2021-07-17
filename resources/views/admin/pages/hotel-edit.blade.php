@extends('admin.layouts.app')

@section('title', 'Admin | Edit Hotel')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hotel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.hotel') }}">Hotel</a></li>
                        <li class="breadcrumb-item active">Edit Hotel</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Edit Lokasi Hotel</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url('/admin/hotel/update/'.$hotel->id_lokasi) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_lokasi">Nama Lokasi Hotel</label>
                                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi"
                                        placeholder="Masukkan Nama Lokasi Hotel" value="{{ $hotel->nama_lokasi }}">
                                    <input type="hidden" name="jenis_lokasi" value="{{ $hotel->jenis_lokasi }}">
                                </div>
                                <div class="form-group">
                                    <label for="ket_lokasi">Keterangan Lokasi Hotel</label>
                                    <input type="text" class="form-control" id="ket_lokasi" name="ket_lokasi"
                                        placeholder="Harga Tiket Masuk / Jam Buka" value="{{ $hotel->ket_lokasi }}">
                                </div>
                                <div class="form-group">
                                    <label for="maps_lokasi">Maps Lokasi Hotel</label>
                                    <input type="text" class="form-control" id="maps_lokasi" name="maps_lokasi"
                                        placeholder="Link Gmaps Lokasi Hotel" value="{{ $hotel->maps_lokasi }}">
                                </div>
                                <div class="form-group">
                                    <label for="summernote">Deskripsi Lokasi Hotel</label>
                                    <textarea id="summernote" name="desc_lokasi">
                                        {{ $hotel->desc_lokasi }}
                                    </textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
