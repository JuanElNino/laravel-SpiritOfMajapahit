@extends('admin.layouts.app')

@section('title', 'Admin | Travel')

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
                        <li class="breadcrumb-item active">Travel</li>
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
                            <h3 class="card-title">Daftar Lokasi Travel</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <a href="{{ route('admin.travel.add') }}" class="btn btn-block btn-outline-primary">
                                        <i class="fas fa-plus"></i>
                                        Tambah
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 500px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Travel</th>
                                        <th>Ket. Travel</th>
                                        <th>Maps Travel</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($travel->count() > 0)
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($travel as $t)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $t->nama_lokasi }}</td>
                                                <td>{{ $t->ket_lokasi }}</td>
                                                <td>{{ $t->maps_lokasi }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('admin.travel.edit', ['id' => $t->id_lokasi]) }}" class="btn btn-warning"><i class="fas fa-pen"></i> Edit</a>
                                                        <a href="{{ route('admin.travel.delete', ['id' => $t->id_lokasi]) }}" onclick="return confirm('Yakin menghapus data tersebut?')" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                        <a href="{{ route('admin.galeri', ['id' => $t->id_lokasi]) }}" class="btn btn-success"><i class="fas fa-images"></i> Gambar</a>
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
