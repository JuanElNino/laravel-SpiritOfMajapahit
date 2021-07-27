<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function index()
    {
        $promo = Promo::all();
        return view('admin.pages.promo', compact('promo'));
    }

    public function create()
    {
        return view('admin.pages.promo-add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'nama_promo' => 'required',
            'desc_promo' => 'required'
        ]);

        Promo::create([
            'nama_promo' => $request->nama_promo,
            'desc_promo' => $request->desc_promo,
            'img_promo' => $request->image
        ]);

        return redirect()->route('admin.promo')->with('status', 'Berhasil menambahkan data promo');
    }

    public function edit($id)
    {
        $promo = Promo::find($id);
        return view('admin.pages.promo-edit', compact('promo'));
    }

    public function update(Request $request, $id)
    {
        $promo = Promo::findOrFail($id);
        
        $promo->nama_promo = $request->get('nama_promo');
        $promo->desc_promo = $request->get('desc_promo');
        $promo->img_promo = $request->get('image');

        $promo->update($request->all());

        return redirect('/admin/promo')->with('status','Berhasil mengubah data promo');
    }

    public function destroy($id)
    {
        Promo::destroy($id);
        return redirect()->route('admin.promo')->with('status','Berhasil menghapus data promo');
    }
}
