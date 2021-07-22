@extends('admin.layouts.app')

@section('title', 'Admin | Tambah Toko')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Toko</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.toko') }}">Toko</a></li>
                        <li class="breadcrumb-item active">Tambah Toko</li>
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
                            <h3 class="card-title">Tambah Lokasi Toko</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ route('admin.toko.store') }}" method="POST">
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
                                    <label for="nama_lokasi">Nama Lokasi Toko</label>
                                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi"
                                        placeholder="Masukkan Nama Lokasi Toko">
                                    <input type="hidden" name="jenis_lokasi" value="Toko">
                                </div>
                                <div class="form-group">
                                    <label for="ket_lokasi">Keterangan Lokasi Toko</label>
                                    <input type="text" class="form-control" id="ket_lokasi" name="ket_lokasi"
                                        placeholder="Harga Tiket Masuk / Jam Buka">
                                </div>
                                <div class="form-group">
                                    <label for="maps_lokasi">Maps Lokasi Toko</label>
                                    <input type="text" class="form-control" id="maps_lokasi" name="maps_lokasi"
                                        placeholder="Link Gmaps Lokasi Toko">
                                </div>
                                <div class="form-group">
                                    <label for="summernote">Deskripsi Lokasi Toko</label>
                                    <textarea id="summernote" name="desc_lokasi">
                                            Masukkan <em>deskripsi</em> <u>toko</u> <strong>disini</strong>
                                        </textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="{{ route('admin.toko') }}" class="btn btn-info">Kembali</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection