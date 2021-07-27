<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Lokasi;
use App\Models\Promo;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function indexWelcome()
    {
        $galeri = DB::table('galeri')
            ->rightJoin('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
            ->get();
        $promo = Promo::orderByDesc('id_promo')->first();
        return view('welcome', compact('galeri', 'promo'));
    }

    public function indexHome()
    {
        $galeri = DB::table('galeri')
            ->rightJoin('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
            ->get();
        $promo = Promo::orderByDesc('id_promo')->first();
        return view('user.home', compact('galeri', 'promo'));
    }

    public function indexWisata()
    {
        $galeri = DB::table('galeri')
            ->rightJoin('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
            ->where('lokasi.jenis_lokasi', 'wisata')
            ->get();
        return view('user.wisata', compact('galeri'));
    }

    public function indexHotel()
    {
        $galeri = DB::table('galeri')
            ->rightJoin('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
            ->where('lokasi.jenis_lokasi', 'hotel')
            ->get();
        return view('user.hotel', compact('galeri'));
    }

    public function indexTravel()
    {
        $galeri = DB::table('galeri')
            ->rightJoin('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
            ->where('lokasi.jenis_lokasi', 'travel')
            ->get();
        return view('user.travel', compact('galeri'));
    }

    public function indexToko()
    {
        $galeri = DB::table('galeri')
            ->rightJoin('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
            ->where('lokasi.jenis_lokasi', 'toko')
            ->get();
        return view('user.toko', compact('galeri'));
    }

    public function indexPromo()
    {
        $banner = Promo::orderBy('created_at', 'desc')
                    ->take(5)
                    ->get();
        $promo = Promo::all();
        return view('user.promo', compact('banner', 'promo'));
    }

    public function detailWisata($id)
    {
        $galeri = Galeri::where('id_lokasi', $id)
                    ->where('is_show', 'no')
                    ->get();
        $tampil = DB::table('galeri')
                    ->rightJoin('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
                    ->where('galeri.is_show', 'yes')
                    ->where('galeri.id_lokasi', $id)
                    ->first();
        $wisata = Lokasi::find($id);
        $ulasan = DB::table('ulasan')
                    ->join('lokasi', 'ulasan.lokasi_id', '=', 'lokasi.id_lokasi')
                    ->join('users', 'ulasan.user_id', '=', 'users.id_user')
                    ->where('lokasi_id', $id)
                    ->where('verifikasi', 'done')
                    ->get();
        return view('user.wisata-detail', compact('galeri', 'tampil', 'wisata', 'ulasan'));
    }

    public function detailHotel($id)
    {
        $galeri = Galeri::where('id_lokasi', $id)
                    ->where('is_show', 'no')
                    ->get();
        $tampil = DB::table('galeri')
                    ->rightJoin('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
                    ->where('galeri.is_show', 'yes')
                    ->where('galeri.id_lokasi', $id)
                    ->first();
        $hotel = Lokasi::find($id);
        $ulasan = DB::table('ulasan')
                    ->join('lokasi', 'ulasan.lokasi_id', '=', 'lokasi.id_lokasi')
                    ->join('users', 'ulasan.user_id', '=', 'users.id_user')
                    ->where('lokasi_id', $id)
                    ->where('verifikasi', 'done')
                    ->get();
        return view('user.hotel-detail', compact('galeri', 'tampil', 'hotel', 'ulasan'));
    }

    public function detailTravel($id)
    {
        $galeri = Galeri::where('id_lokasi', $id)
                    ->where('is_show', 'no')
                    ->get();
        $tampil = DB::table('galeri')
                    ->rightJoin('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
                    ->where('galeri.is_show', 'yes')
                    ->where('galeri.id_lokasi', $id)
                    ->first();
        $travel = Lokasi::find($id);
        $ulasan = DB::table('ulasan')
                    ->join('lokasi', 'ulasan.lokasi_id', '=', 'lokasi.id_lokasi')
                    ->join('users', 'ulasan.user_id', '=', 'users.id_user')
                    ->where('lokasi_id', $id)
                    ->where('verifikasi', 'done')
                    ->get();
        return view('user.travel-detail', compact('galeri', 'tampil', 'travel', 'ulasan'));
    }

    public function detailToko($id)
    {
        $galeri = Galeri::where('id_lokasi', $id)
                    ->where('is_show', 'no')
                    ->get();
        $tampil = DB::table('galeri')
                    ->rightJoin('lokasi', 'galeri.id_lokasi', '=', 'lokasi.id_lokasi')
                    ->where('galeri.is_show', 'yes')
                    ->where('galeri.id_lokasi', $id)
                    ->first();
        $toko = Lokasi::find($id);
        $ulasan = DB::table('ulasan')
                    ->join('lokasi', 'ulasan.lokasi_id', '=', 'lokasi.id_lokasi')
                    ->join('users', 'ulasan.user_id', '=', 'users.id_user')
                    ->where('lokasi_id', $id)
                    ->where('verifikasi', 'done')
                    ->get();
        return view('user.toko-detail', compact('galeri', 'tampil', 'toko', 'ulasan'));
    }

    public function detailPromo($id)
    {
        $promo = Promo::find($id);
        return view('user.promo-detail', compact('promo'));
    }

    public function createUlasan($id)
    {
        $lokasi = Lokasi::find($id);
        return view('user.ulasan', compact('lokasi'));
    }

    public function storeUlasan(Request $request)
    {
        $userId = Auth::user()->id_user;
        Ulasan::create([
            'user_id' => $userId,
            'lokasi_id' => $request->id_lokasi,
            'ulasan' => $request->ulasan,
            'kritik' => $request->kritik,
            'rating' => $request->rating,
            'verifikasi' => 'not'
        ]);

        return redirect()->route('detail.wisata',['id'=>$request->id_lokasi])->with('status', 'Berhasil menambahkan ulasan, mohon ditunggu ulasanmu akan diverifikasi terlebih dahulu sebelum ditampilkan');
    }
}
