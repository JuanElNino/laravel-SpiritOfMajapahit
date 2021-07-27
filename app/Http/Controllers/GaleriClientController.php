<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GaleriCLientController extends Controller
{
    public function index($id)
    {
        $galeri = DB::table('galeri')
            ->join('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
            ->select('galeri.*', 'lokasi.nama_lokasi')
            ->where('galeri.id_lokasi', $id)
            ->get();
        $nama = $galeri->first();
        $lokasi = DB::table('lokasi')
            ->where('id_lokasi', $id)
            ->first();
        return view('admin.pages.galeri', compact('galeri', 'nama', 'lokasi'));
    }

    public function edit($id)
    {
        $galeri = DB::table('galeri')
            ->join('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
            ->select('galeri.*', 'lokasi.nama_lokasi')
            ->where('galeri.id_lokasi', $id)
            ->get();
        $nama = $galeri->first();
        $lokasi = DB::table('lokasi')
            ->where('id_lokasi', $id)
            ->first();
        return view('admin.pages.galeri-edit', compact('galeri', 'nama', 'lokasi'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'id_lokasi' => 'required'
        ]);

        $tampil = $request->tampil;
        if ($tampil == null) {
            $tampil = 'no';
        }

        Galeri::create([
            'nama_galeri' => $request->image,
            'id_lokasi' => $request->id_lokasi,
            'is_show' => $tampil
        ]);
        
        return redirect()->route('admin.galeri',['id'=>$request->id_lokasi])->with('status', 'Berhasil menambahkan media');
        
    }

    public function destroy($id)
    {
        $data = Galeri::find($id);
        Galeri::destroy($id);
        return redirect()->route('admin.galeri.edit',['id'=>$data->id_lokasi])->with('status', 'Berhasil menghapus media');
    }
}
