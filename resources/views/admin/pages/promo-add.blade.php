@extends('admin.layouts.app')

@section('title', 'Admin | Tambah Promo')

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
                        <li class="breadcrumb-item active">Tambah Promo</li>
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
                            <h3 class="card-title">Tambah Data Promo</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ route('admin.promo.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="nama_promo">Nama Promo</label>
                                    <input type="text" class="form-control" id="nama_promo" name="nama_promo" placeholder="Masukkan Nama Promo">
                                </div>
                                <div class="form-group">
                                    <label for="summernote">Detail Promo</label>
                                    <textarea class="form-control" rows="4" id="summernote" name="desc_promo">
                                        Masukkan <em>detail</em> <u>promo</u> <strong>disini</strong>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar Promo</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Tambah</button>
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
