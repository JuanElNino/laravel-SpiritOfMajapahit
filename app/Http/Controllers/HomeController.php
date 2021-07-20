<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Promo;
use App\Models\Ulasan;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lokasi = Lokasi::all();
        $ulasan = Ulasan::all();
        $promo = Promo::all();
        $user = User::where('role','user')
                ->get();
        return view('admin.pages.home', compact('lokasi', 'ulasan', 'promo', 'user'));
    }
}
