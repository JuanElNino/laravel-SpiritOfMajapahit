@extends('admin.layouts.app')

@section('title', 'Admin | Edit Promo')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Promo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.promo') }}">Promo</a></li>
                        <li class="breadcrumb-item active">Edit Promo</li>
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
                            <h3 class="card-title">Tambah Data Promo</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url('/admin/promo/update/'.$promo->id_promo) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_promo">Nama Promo</label>
                                    <input type="text" class="form-control" id="nama_promo" name="nama_promo" placeholder="Masukkan Nama Promo" value="{{ $promo->nama_promo }}">
                                </div>
                                <div class="form-group">
                                    <label for="summernote">Detail Promo</label>
                                    <textarea class="form-control" id="summernote" name="desc_promo">
                                        {{ $promo->desc_promo }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar Promo (Jangan di klik jika tidak ingin mengganti gambar!)</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Simpan</button>
                                <a href="{{ route('admin.promo') }}" class="btn btn-info">Kembali</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
