<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
    	$data = Galeri::all();

    	if (count($data) > 0) {
    		$res['message'] = "Success!";
    		$res['values'] = $data;
    		return response($res);
    	}
    	else{
    		$res['message'] = "Kosong!";
    		return response($res);
    	}
    }

    public function getId($id)
    {
    	$data = Galeri::where('id_galeri',$id)->get();

    	if (count($data) > 0) {
    		$res['message'] = "Success!";
    		$res['values'] = $data;
    		return response($res);
    	}
    	else{
    		$res['message'] = "Kosong!";
    		return response($res);
    	}
    }

    public function getLokasi($id)
    {
        $data = Galeri::where('id_lokasi',$id)->get();

    	if (count($data) > 0) {
    		$res['message'] = "Success!";
    		$res['values'] = $data;
    		return response($res);
    	}
    	else{
    		$res['message'] = "Kosong!";
    		return response($res);
    	}
    }

    public function create(Request $request)
    {
        $galeri = new Galeri();
        $galeri->nama_galeri = $request->nama_galeri;
        $galeri->id_lokasi = $request->id_lokasi;
        $galeri->is_show = $request->is_show;

        if($galeri->save()){
    		$res['message'] = "Data berhasil ditambah!";
    		$res['values'] = $galeri;
    		return response($res);
    	}
    	else{
    		$res['message'] = "Gagal!";
    		return response($res);
    	}
    }

    public function update(Request $request, $id)
    {
        $nama_galeri = $request->nama_galeri;
        $id_lokasi = $request->id_lokasi;
        $is_show = $request->is_show;

        $galeri = Galeri::find($id);
        $galeri->nama_lokasi = $nama_galeri;
        $galeri->desc_lokasi = $id_lokasi;
        $galeri->ket_lokasi = $is_show;

        if($galeri->save()){
    		$res['message'] = "Data berhasil diubah!";
    		$res['values'] = $galeri;
    		return response($res);
    	}
    	else{
    		$res['message'] = "Gagal!";
    		return response($res);
    	}
    }

    public function delete($id)
    {
    	$data = Galeri::where('id',$id);

    	if($data->delete()){
    		$res['message'] = "Data berhasil dihapus!";
    		return response($res);
    	}
    	else{
    		$res['message'] = "Gagal!";
    		return response($res);
    	}
    }
}
