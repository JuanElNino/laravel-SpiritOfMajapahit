<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'id_lokasi' => 'required'
        ]);

        $tampil = $request->tampil;
        // Handle file Upload
        if($request->hasFile('image')){

            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to upload
            $fileNameToUpload = $filename.'_'.time().'.'.$extension;
            // Filename to store
            $fileNameToStore = 'storage/images/'.$fileNameToUpload;
            // Upload Image
            //Storage::put('public/images', $fileNameToStore);
            $path = $request->file('image')->storeAs('public/images/',$fileNameToUpload);
        }
        else {
            $fileNameToStore = 'template.png';
        }

        if ($tampil == null) {
            $tampil = 'no';
        }

        Galeri::create([
            'nama_galeri' => $fileNameToStore,
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
