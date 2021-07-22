@extends('admin.layouts.app')

@section('title', 'Admin | Tambah Hotel')

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
                        <li class="breadcrumb-item active">Tambah Hotel</li>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Lokasi Hotel</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ route('admin.hotel.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="nama_lokasi">Nama Lokasi Hotel</label>
                                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi"
                                        placeholder="Masukkan Nama Lokasi Hotel">
                                    <input type="hidden" name="jenis_lokasi" value="Hotel">
                                </div>
                                <div class="form-group">
                                    <label for="ket_lokasi">Keterangan Lokasi Hotel</label>
                                    <input type="text" class="form-control" id="ket_lokasi" name="ket_lokasi"
                                        placeholder="Harga Tiket Masuk / Jam Buka">
                                </div>
                                <div class="form-group">
                                    <label for="maps_lokasi">Maps Lokasi Hotel</label>
                                    <input type="text" class="form-control" id="maps_lokasi" name="maps_lokasi"
                                        placeholder="Link Gmaps Lokasi Hotel">
                                </div>
                                <div class="form-group">
                                    <label for="summernote">Deskripsi Lokasi Hotel</label>
                                    <textarea id="summernote" name="desc_lokasi">
                                            Masukkan <em>deskripsi</em> <u>hotel</u> <strong>disini</strong>
                                        </textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('admin.hotel') }}" class="btn btn-info">Kembali</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
