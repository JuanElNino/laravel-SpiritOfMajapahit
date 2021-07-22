<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class LokasiClientController extends Controller
{
    public function indexWisata()
    {
        $wisata = Lokasi::where('jenis_lokasi', 'Wisata')
            ->get();
        return view('admin.pages.wisata', compact('wisata'));
    }

    public function indexToko()
    {
        $toko = Lokasi::where('jenis_lokasi', 'Toko')
            ->get();
        return view('admin.pages.toko', compact('toko'));
    }

    public function indexTravel()
    {
        $travel = Lokasi::where('jenis_lokasi', 'Travel')
            ->get();
        return view('admin.pages.travel', compact('travel'));
    }

    public function indexHotel()
    {
        $hotel = Lokasi::where('jenis_lokasi', 'Hotel')
            ->get();
        return view('admin.pages.hotel', compact('hotel'));
    }

    public function createWisata()
    {
        return view('admin.pages.wisata-add');
    }

    public function createToko()
    {
        return view('admin.pages.toko-add');
    }

    public function createTravel()
    {
        return view('admin.pages.travel-add');
    }

    public function createHotel()
    {
        return view('admin.pages.hotel-add');
    }

    public function storeWisata(Request $request)
    {
        $this->validate($request, [
            'nama_lokasi' => 'required|string',
            'desc_lokasi' => 'required',
            'ket_lokasi' => 'required',
            'maps_lokasi' => 'required'
        ]);
        
        Lokasi::create([
            'nama_lokasi' => $request->nama_lokasi,
            'desc_lokasi' => $request->desc_lokasi,
            'ket_lokasi' => $request->ket_lokasi,
            'maps_lokasi' => $request->maps_lokasi,
            'jenis_lokasi' => $request->jenis_lokasi
        ]);

        return redirect('/admin/wisata')->with('success', 'Lokasi wisata telah ditambahkan');
    }

    public function storeToko(Request $request)
    {
        $this->validate($request, [
            'nama_lokasi' => 'required|string',
            'desc_lokasi' => 'required',
            'ket_lokasi' => 'required',
            'maps_lokasi' => 'required'
        ]);

        Lokasi::create([
            'nama_lokasi' => $request->nama_lokasi,
            'desc_lokasi' => $request->desc_lokasi,
            'ket_lokasi' => $request->ket_lokasi,
            'maps_lokasi' => $request->maps_lokasi,
            'jenis_lokasi' => $request->jenis_lokasi
        ]);

        return redirect('/admin/toko')->with('success', 'Lokasi toko telah ditambahkan');
    }

    public function storeTravel(Request $request)
    {
        $this->validate($request, [
            'nama_lokasi' => 'required|string',
            'desc_lokasi' => 'required',
            'ket_lokasi' => 'required',
            'maps_lokasi' => 'required'
        ]);

        Lokasi::create([
            'nama_lokasi' => $request->nama_lokasi,
            'desc_lokasi' => $request->desc_lokasi,
            'ket_lokasi' => $request->ket_lokasi,
            'maps_lokasi' => $request->maps_lokasi,
            'jenis_lokasi' => $request->jenis_lokasi
        ]);

        return redirect('/admin/travel')->with('success', 'Lokasi travel telah ditambahkan');
    }

    public function storeHotel(Request $request)
    {
        $this->validate($request, [
            'nama_lokasi' => 'required|string',
            'desc_lokasi' => 'required',
            'ket_lokasi' => 'required',
            'maps_lokasi' => 'required'
        ]);

        Lokasi::create([
            'nama_lokasi' => $request->nama_lokasi,
            'desc_lokasi' => $request->desc_lokasi,
            'ket_lokasi' => $request->ket_lokasi,
            'maps_lokasi' => $request->maps_lokasi,
            'jenis_lokasi' => $request->jenis_lokasi
        ]);

        return redirect('/admin/hotel')->with('success', 'Lokasi hotel telah ditambahkan');
    }

    public function editWisata($id)
    {
        $wisata = Lokasi::find($id);
    
        return view('admin.pages.wisata-edit', compact('wisata'));
    }

    public function editToko($id)
    {
        $toko = Lokasi::find($id);
    
        return view('admin.pages.toko-edit', compact('toko'));
    }

    public function editTravel($id)
    {
        $travel = Lokasi::find($id);
    
        return view('admin.pages.travel-edit', compact('travel'));
    }

    public function editHotel($id)
    {
        $hotel = Lokasi::find($id);
    
        return view('admin.pages.hotel-edit', compact('hotel'));
    }

    public function updateWisata(Request $request, $id)
    {
        $wisata = Lokasi::findOrFail($id);

        $wisata->nama_lokasi = $request->get('nama_lokasi');
        $wisata->desc_lokasi = $request->get('desc_lokasi');
        $wisata->ket_lokasi = $request->get('ket_lokasi');
        $wisata->maps_lokasi = $request->get('maps_lokasi');
        $wisata->jenis_lokasi = $request->get('jenis_lokasi');
    
        $wisata->update($request->all());

        return redirect('/admin/wisata')->with('status','Berhasil mengubah data lokasi wisata');
    }

    public function updateToko(Request $request, $id)
    {
        $toko = Lokasi::findOrFail($id);

        $toko->nama_lokasi = $request->get('nama_lokasi');
        $toko->desc_lokasi = $request->get('desc_lokasi');
        $toko->ket_lokasi = $request->get('ket_lokasi');
        $toko->maps_lokasi = $request->get('maps_lokasi');
        $toko->jenis_lokasi = $request->get('jenis_lokasi');
    
        $toko->update($request->all());

        return redirect('/admin/toko')->with('status','Berhasil mengubah data lokasi toko');
    }

    public function updateTravel(Request $request, $id)
    {
        $travel = Lokasi::findOrFail($id);

        $travel->nama_lokasi = $request->get('nama_lokasi');
        $travel->desc_lokasi = $request->get('desc_lokasi');
        $travel->ket_lokasi = $request->get('ket_lokasi');
        $travel->maps_lokasi = $request->get('maps_lokasi');
        $travel->jenis_lokasi = $request->get('jenis_lokasi');
    
        $travel->update($request->all());

        return redirect('/admin/wisata')->with('status','Berhasil mengubah data lokasi travel');
    }

    public function updateHotel(Request $request, $id)
    {
        $hotel = Lokasi::findOrFail($id);

        $hotel->nama_lokasi = $request->get('nama_lokasi');
        $hotel->desc_lokasi = $request->get('desc_lokasi');
        $hotel->ket_lokasi = $request->get('ket_lokasi');
        $hotel->maps_lokasi = $request->get('maps_lokasi');
        $hotel->jenis_lokasi = $request->get('jenis_lokasi');
    
        $hotel->update($request->all());

        return redirect('/admin/wisata')->with('status','Berhasil mengubah data lokasi hotel');
    }

    public function destroyWisata($id)
    {
        Lokasi::destroy($id);
        $data = DB::table('galeri')
            ->where('id_lokasi', $id)
            ->get();
        foreach($data as $d){
            Storage::delete('app/public/images/'.$d->nama_galeri);
            $data->delete();
        }
        return redirect()->route('admin.wisata')->with('status','Berhasil menghapus lokasi wisata');
    }

    public function destroyToko($id)
    {
        Lokasi::destroy($id);
        $data = DB::table('galeri')
            ->where('id_lokasi', $id)
            ->get();
        foreach($data as $d){
            Storage::delete('app/public/images/'.$d->nama_galeri);
            $data->delete();
        }
        return redirect()->route('admin.toko')->with('status','Berhasil menghapus lokasi toko');
    }

    public function destroyTravel($id)
    {
        Lokasi::destroy($id);
        $data = DB::table('galeri')
            ->where('id_lokasi', $id)
            ->get();
        foreach($data as $d){
            Storage::delete('app/public/images/'.$d->nama_galeri);
            $data->delete();
        }
        return redirect()->route('admin.travel')->with('status','Berhasil menghapus lokasi travel');
    }

    public function destroyHotel($id)
    {
        Lokasi::destroy($id);
        $data = DB::table('galeri')
            ->where('id_lokasi', $id)
            ->get();
        foreach($data as $d){
            Storage::delete('public/images/'.$d->nama_galeri);
            $data->delete();
        }
        return redirect()->route('admin.hotel')->with('status','Berhasil menghapus lokasi hotel');
    }
}
