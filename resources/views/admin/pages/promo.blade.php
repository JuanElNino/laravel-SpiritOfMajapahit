@extends('admin.layouts.app')

@section('title', 'Admin | Promo')

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
                        <li class="breadcrumb-item active">Promo</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Promo</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <a href="{{ route('admin.promo.add') }}" class="btn btn-block btn-outline-primary">
                                        <i class="fas fa-plus"></i>
                                        Tambah
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 100%;">
                            <table class="table table-bordered table-hover text-wrap" id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Promo</th>
                                        <th>Detail Promo</th>
                                        <th>Gambar Promo</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($promo->count() > 0)
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($promo as $p)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $p->nama_promo }}</td>
                                                <td>{{ $p->desc_promo }}</td>
                                                <td><img src="{{ $p->img_promo }}" class="img-fluid mb-2" alt="{{ $p->nama_promo }}" style="width: 150px"></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('admin.promo.edit', ['id' => $p->id_promo]) }}" class="btn btn-warning"><i class="fas fa-pen"></i> Edit</a>
                                                        <a href="{{ route('admin.promo.delete', ['id' => $p->id_promo]) }}" onclick="return confirm('Yakin menghapus data tersebut?')" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
