<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'nama_promo' => 'required',
            'desc_promo' => 'required'
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

        Promo::create([
            'nama_promo' => $request->nama_promo,
            'desc_promo' => $request->desc_promo,
            'img_promo' => $fileNameToStore
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
        // Handle file Upload
        if($request->hasFile('image')){
            Storage::delete('public/images/'.$promo->img_promo);
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
            $promo->img_promo = $fileNameToStore;
        }

        
        $promo->nama_promo = $request->get('nama_promo');
        $promo->desc_promo = $request->get('desc_promo');

        $promo->update($request->all());

        return redirect('/admin/promo')->with('status','Berhasil mengubah data promo');
    }

    public function destroy($id)
    {
        $promo = Promo::find($id);
        Promo::destroy($id);
        Storage::delete('public/images/'.$promo->img_promo);
        return redirect()->route('admin.promo')->with('status','Berhasil Mengahapus Promo');
    }
}
