@extends('admin.layouts.app')

@section('title', 'Admin | Edit Ulasan')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.ulasan') }}">Ulasan</a></li>
                        <li class="breadcrumb-item active">Edit Ulasan</li>
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
                            <h3 class="card-title">Edit Ulasan</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url('/admin/ulasan/update/'.$ulasan->id_ulasan) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="verifikasi">Verifikasi Ulasan</label>
                                        <select class="form-control" id="verifikasi" name="verifikasi">
                                            <option>Pilih Opsi...</option>
                                            <option value="done">Terverivikasi</option>
                                            <option value="not">Belum Terverivikasi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Simpan</button>
                                <a href="{{ route('admin.ulasan') }}" class="btn btn-info">Kembali</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
