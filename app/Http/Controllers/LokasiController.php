<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
    	
		if (request()->jenis_lokasi) {
			$data = Lokasi::where('jenis_lokasi', request()->jenis_lokasi)->get();

			if (count($data) > 0) {
				$res['message'] = "Success!";
				$res['values'] = $data;
				return response($res);
			}
			else{
				$res['message'] = "Kosong!";
				return response($res);
			}

		} else {
			$data = Lokasi::all();

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
    }

    public function getId($id)
    {
    	$data = Lokasi::where('id_lokasi',$id)->get();

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
        $lokasi = new Lokasi();
        $lokasi->nama_lokasi = $request->nama_lokasi;
        $lokasi->desc_lokasi = $request->desc_lokasi;
        $lokasi->ket_lokasi = $request->ket_lokasi;
        $lokasi->maps_lokasi = $request->maps_lokasi;
        $lokasi->jenis_lokasi = $request->jenis_lokasi;

        if($lokasi->save()){
    		$res['message'] = "Data berhasil ditambah!";
    		$res['values'] = $lokasi;
    		return response($res);
    	}
    	else{
    		$res['message'] = "Gagal!";
    		return response($res);
    	}
    }

    public function update(Request $request, $id)
    {
        $nama_lokasi = $request->nama_lokasi;
        $desc_lokasi = $request->desc_lokasi;
        $ket_lokasi = $request->ket_lokasi;
        $maps_lokasi = $request->maps_lokasi;
        $jenis_lokasi = $request->jenis_lokasi;

        $lokasi = Lokasi::find($id);
        $lokasi->nama_lokasi = $nama_lokasi;
        $lokasi->desc_lokasi = $desc_lokasi;
        $lokasi->ket_lokasi = $ket_lokasi;
        $lokasi->maps_lokasi = $maps_lokasi;
        $lokasi->jenis_lokasi = $jenis_lokasi;

        if($lokasi->save()){
    		$res['message'] = "Data berhasil diubah!";
    		$res['values'] = $lokasi;
    		return response($res);
    	}
    	else{
    		$res['message'] = "Gagal!";
    		return response($res);
    	}
    }

    public function delete($id)
    {
    	$data = Lokasi::where('id',$id);

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
