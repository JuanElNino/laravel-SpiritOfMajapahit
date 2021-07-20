@extends('admin.layouts.app')

@section('title', 'Admin | Edit Ttravel')

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
                        <li class="breadcrumb-item active">Edit Travel</li>
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
                            <h3 class="card-title">Edit Lokasi Travel</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url('/admin/travel/update/'.$travel->id_lokasi) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_lokasi">Nama Lokasi Travel</label>
                                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi"
                                        placeholder="Masukkan Nama Lokasi Travel" value="{{ $travel->nama_lokasi }}">
                                    <input type="hidden" name="jenis_lokasi" value="{{ $travel->jenis_lokasi }}">
                                </div>
                                <div class="form-group">
                                    <label for="ket_lokasi">Keterangan Lokasi Travel</label>
                                    <input type="text" class="form-control" id="ket_lokasi" name="ket_lokasi"
                                        placeholder="Harga Tiket Masuk / Jam Buka" value="{{ $travel->ket_lokasi }}">
                                </div>
                                <div class="form-group">
                                    <label for="maps_lokasi">Maps Lokasi Travel</label>
                                    <input type="text" class="form-control" id="maps_lokasi" name="maps_lokasi"
                                        placeholder="Link Gmaps Lokasi Travel" value="{{ $travel->maps_lokasi }}">
                                </div>
                                <div class="form-group">
                                    <label for="summernote">Deskripsi Lokasi Travel</label>
                                    <textarea id="summernote" name="desc_lokasi">
                                        {{ $travel->desc_lokasi }}
                                    </textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Simpan</button>
                                <a href="{{ route('admin.travel') }}" class="btn btn-info">Kembali</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
