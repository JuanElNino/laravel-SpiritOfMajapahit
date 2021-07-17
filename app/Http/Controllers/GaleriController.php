<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index($id)
    {
        $galeri = DB::table('galeri')
            ->join('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
            ->select('galeri.*', 'lokasi.nama_lokasi')
            ->where('galeri.id_lokasi', $id)
            ->get();
        $nama = $galeri->first();
        $wisata = DB::table('lokasi')
            ->where('jenis_lokasi', 'Wisata')
            ->where('id_lokasi', $id)
            ->first();
        return view('admin.pages.galeri', compact('galeri', 'nama', 'wisata'));
    }

    public function edit($id)
    {
        $galeri = DB::table('galeri')
            ->join('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
            ->select('galeri.*', 'lokasi.nama_lokasi')
            ->where('galeri.id_lokasi', $id)
            ->get();
        $nama = $galeri->first();
        $wisata = DB::table('lokasi')
            ->where('jenis_lokasi', 'Wisata')
            ->where('id_lokasi', $id)
            ->first();
        return view('admin.pages.galeri-edit', compact('galeri', 'nama', 'wisata'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'id_lokasi' => 'required'
        ]);

        // Handle file Upload
        if($request->hasFile('image')){

            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            //Storage::disk('local')->put('images/', $fileNameToStore);
            $path = $request->file('image')->storeAs('public/images',$fileNameToStore);
        }
        else {
            $fileNameToStore = 'template.png';
        }

        Galeri::create([
            'nama_galeri' => $fileNameToStore,
            'id_lokasi' => $request->id_lokasi
        ]);
        
        return redirect()->route('admin.galeri',['id'=>$request->id_lokasi])->with('status', 'Berhasil menambahkan media');
        
    }

    public function destroy($id)
    {
        $data = Galeri::find($id);
        Galeri::destroy($id);
        //$id_lokasi = $data->id_lokasi;
        return redirect()->route('admin.galeri.edit',['id'=>$data->id_lokasi])->with('status', 'Berhasil menghapus media');
    }
}
