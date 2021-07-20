<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UlasanController extends Controller
{
    public function index()
    {
        $ulasan = DB::table('ulasan')
            ->join('lokasi', 'ulasan.lokasi_id', '=', 'lokasi.id_lokasi')
            ->join('users', 'ulasan.user_id', '=', 'users.id_user')
            ->get();

            return view('admin.pages.ulasan', compact('ulasan'));
    }

    public function edit($id)
    {
        $ulasan = Ulasan::find($id);
        return view('admin.pages.ulasan-edit', compact('ulasan'));
    }

    public function update(Request $request, $id)
    {
        $ulasan = Ulasan::findOrFail($id);
        $ulasan->verifikasi = $request->get('verifikasi');

        $ulasan->update($request->all());

        return redirect('/admin/ulasan')->with('status','Berhasil mengubah data ulasan');
    }

    public function destroy($id)
    {
        Ulasan::destroy($id);
        return redirect()->route('admin.ulasan')->with('status','Berhasil Mengahapus Ulasan');
    }
}
