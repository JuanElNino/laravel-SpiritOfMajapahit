@extends('admin.layouts.app')

@section('title', 'Admin | Tambah Travel')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Travel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.travel') }}">Travel</a></li>
                        <li class="breadcrumb-item active">Tambah Travel</li>
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
                            <h3 class="card-title">Tambah Lokasi Travel</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ route('admin.travel.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_lokasi">Nama Lokasi Travel</label>
                                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi"
                                        placeholder="Masukkan Nama Lokasi Travel">
                                    <input type="hidden" name="jenis_lokasi" value="Travel">
                                </div>
                                <div class="form-group">
                                    <label for="ket_lokasi">Keterangan Lokasi Travel</label>
                                    <input type="text" class="form-control" id="ket_lokasi" name="ket_lokasi"
                                        placeholder="Harga Tiket Masuk / Jam Buka">
                                </div>
                                <div class="form-group">
                                    <label for="maps_lokasi">Maps Lokasi Travel</label>
                                    <input type="text" class="form-control" id="maps_lokasi" name="maps_lokasi"
                                        placeholder="Link Gmaps Lokasi Travel">
                                </div>
                                <div class="form-group">
                                    <label for="summernote">Deskripsi Lokasi Travel</label>
                                    <textarea id="summernote" name="desc_lokasi">
                                            Masukkan <em>deskripsi</em> <u>travel</u> <strong>disini</strong>
                                        </textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
