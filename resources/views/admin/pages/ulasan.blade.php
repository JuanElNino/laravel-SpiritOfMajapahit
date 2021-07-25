@extends('admin.layouts.app')

@section('title', 'Admin | Ulasan')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ulasan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Ulasan</li>
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
                            <h3 class="card-title">Daftar Ulasan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="height: 100%;">
                            <table class="table table-bordered table-hover text-wrap" id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama User</th>
                                        <th>Nama Lokasi</th>
                                        <th>Ulasan</th>
                                        <th>Kritik</th>
                                        <th>Rating</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($ulasan->count() > 0)
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($ulasan as $u)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $u->nama }}</td>
                                                <td>{{ $u->nama_lokasi }}</td>
                                                @if ($u->ulasan == null)
                                                    <td>Tidak ada ulasan</td>
                                                @else
                                                    <td>{{ $u->ulasan }}</td>
                                                @endif
                                                @if ($u->kritik == null)
                                                    <td>Tidak ada kritik</td>
                                                @else
                                                    <td>{{ $u->kritik }}</td>    
                                                @endif                                                
                                                <td>{{ $u->rating }}</td>
                                                @if ($u->verifikasi == 'done')
                                                    <td>Terverivikasi</td>
                                                @else
                                                    <td>Belum Diverifikasi</td>
                                                @endif
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('admin.ulasan.edit', ['id' => $u->id_ulasan]) }}" class="btn btn-warning"><i class="fas fa-pen"></i> Edit</a>
                                                        <a href="{{ route('admin.ulasan.delete', ['id' => $u->id_ulasan]) }}" onclick="return confirm('Yakin menghapus data tersebut?')" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
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
