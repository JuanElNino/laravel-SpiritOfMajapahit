@extends('admin.layouts.app')

@section('title', 'Admin | Edit Toko')

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
                        <li class="breadcrumb-item active">Edit Toko</li>
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
                            <h3 class="card-title">Edit Lokasi Toko</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url('/admin/toko/update/'.$toko->id_lokasi) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_lokasi">Nama Lokasi Toko</label>
                                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi"
                                        placeholder="Masukkan Nama Lokasi Toko" value="{{ $toko->nama_lokasi }}">
                                    <input type="hidden" name="jenis_lokasi" value="{{ $toko->jenis_lokasi }}">
                                </div>
                                <div class="form-group">
                                    <label for="ket_lokasi">Keterangan Lokasi Toko</label>
                                    <input type="text" class="form-control" id="ket_lokasi" name="ket_lokasi"
                                        placeholder="Harga Tiket Masuk / Jam Buka" value="{{ $toko->ket_lokasi }}">
                                </div>
                                <div class="form-group">
                                    <label for="maps_lokasi">Maps Lokasi Toko</label>
                                    <input type="text" class="form-control" id="maps_lokasi" name="maps_lokasi"
                                        placeholder="Link Gmaps Lokasi Toko" value="{{ $toko->maps_lokasi }}">
                                </div>
                                <div class="form-group">
                                    <label for="summernote">Deskripsi Lokasi Toko</label>
                                    <textarea id="summernote" name="desc_lokasi">
                                        {{ $toko->desc_lokasi }}
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
