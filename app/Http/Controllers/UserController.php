<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.pages.user', compact('user'));
    }

    public function create()
    {
        return view('admin.pages.user-add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:100',
            'password' => 'required|string|min:8',
            'alamat'  => 'required|string|max:20',
            'email'  => 'required|string|max:30',
            'role' => 'nullable'
        ]);

        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'role' => $request->role,
            'email' => $request->email,            
            'alamat'  => $request->alamat,           
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.user')->with('status', 'Berhasil menambahkan data user');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.pages.user-edit', compact('user'));
    }

    public function editPass($id)
    {
        $user = User::find($id);

        return view('admin.pages.user-editpass', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:100',
            'alamat'  => 'required|string|max:20',
            'email'  => 'required|string|max:30',
            'role' => 'nullable'
        ]);

        $user = User::findOrFail($id);

        $user->nama = $request->input('nama');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->alamat = $request->input('alamat');
    
        $user->save();

        return redirect('/admin/user')->with('status','Berhasil mengubah data user');
    }

    public function updatePass(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'string|min:8'
        ]);

        $user = User::findOrFail($id);

        $user->password = Hash::make($request->input('password'));
    
        $user->save();

        return redirect('/admin/user')->with('status','Berhasil mengubah data user');
    }


    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('admin.user')->with('status','Berhasil menghapus data user');
    }
}
