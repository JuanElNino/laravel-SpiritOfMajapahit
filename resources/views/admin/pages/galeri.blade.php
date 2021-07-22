@extends('admin.layouts.app')

@section('title', 'Admin | Galeri')

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
                        <li class="breadcrumb-item"><a href="#">Galeri</a></li>
                        @if ($galeri->count() < 0)
                            <li class="breadcrumb-item active">{{ $nama->nama_lokasi }}</li>    
                        @else
                            <li class="breadcrumb-item active">{{ $lokasi->nama_lokasi }}</li>
                        @endif
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
                            <h4 class="card-title">Daftar Foto</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @if ($galeri->count() > 0)
                                    @foreach ($galeri as $g)
                                        <div class="col-sm-2">
                                            <a href="{{ asset('storage/images/' . $g->nama_galeri) }}" data-toggle="lightbox" data-title="{{ $g->nama_lokasi }}" data-gallery="gallery">
                                                <img src="{{ asset('storage/images/' . $g->nama_galeri) }}" class="img-fluid mb-2" alt="{{ $g->nama_lokasi }}" />
                                            </a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="col-sm-2">
                                        <a href="https://us.123rf.com/450wm/pavelstasevich/pavelstasevich1811/pavelstasevich181101028/112815904-no-image-available-icon-flat-vector-illustration.jpg?ver=6" data-toggle="lightbox"
                                            data-title="{{$lokasi->nama_lokasi}}" data-gallery="gallery">
                                            <img src="https://us.123rf.com/450wm/pavelstasevich/pavelstasevich1811/pavelstasevich181101028/112815904-no-image-available-icon-flat-vector-illustration.jpg?ver=6" class="img-fluid mb-2"
                                                alt="{{$lokasi->nama_lokasi}}" />
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image">Tambahkan Gambar</label>
                                <input type="file" class="form-control" id="image" name="image">
                                <input type="hidden" name="id_lokasi" value="{{ $lokasi->id_lokasi }}">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="tampil" id="tampil" value="yes">
                                <label for="tampil">Tampilkan Gambar di halaman home</label>
                            </div>
                            <div class="col-4">
                                @if ($galeri->count() > 0)
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    <a href="{{ route('admin.galeri.edit', ['id' => $nama->id_lokasi]) }}"
                                    class="btn btn-warning">Edit</a>                                    
                                @else
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                @endif   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
