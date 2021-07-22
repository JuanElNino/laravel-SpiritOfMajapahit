@extends('admin.layouts.app')

@section('title', 'Admin | Edit Galeri')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Galeri</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a
                                href="{{ route('admin.galeri', ['id' => $lokasi->id_lokasi]) }}">Galeri</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ $lokasi->nama_lokasi }}</a></li>
                        <li class="breadcrumb-item active">Edit Galeri</li>
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
                            <h3 class="card-title">Edit Galeri</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 500px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($galeri->count() > 0)
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($galeri as $g)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td><img src="{{ asset('storage/images/' . $g->nama_galeri) }}" class="img-fluid mb-2" alt="{{ $g->nama_lokasi }}" style="width: 150px"></td>
                                                <td>
                                                    <div class="col-4">
                                                        <a href="{{ route('admin.galeri.delete', ['id' => $g->id_galeri]) }}" onclick="return confirm('Yakin menghapus data tersebut?')" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="{{ route('admin.galeri', ['id' => $lokasi->id_lokasi]) }}" class="btn btn-info">Kembali</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
