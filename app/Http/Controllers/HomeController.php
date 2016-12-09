<?php

namespace App\Http\Controllers;

use App\Bloodtype;
use App\Halaman;
use App\Informasi;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function beranda()
    {

        return view('beranda');
    }

    public function berita()
    {
        $data = Informasi::where('user_id', 1)->get();
        return view('beritahome', compact('data'));
    }

    public function formpendaftaran()
    {
        $bloodtypes = Bloodtype::all();
        return view('formpendaftaran', compact('bloodtypes'));
    }

    public function formpendaftaranproses(Request $r){
        $data = Users::create([
           'blood_type_id' => $r->input('bloodtype'),
            'username' => $r->input('user'),
            'password' => bcrypt($r->input('pass')),
            'fullname' => $r->input('fullname'),
            'pob' => $r->input('pob'),
            'dob' => $r->input('dob'),
            'phonenumber' => $r->input('phonenumber'),
            'address' => $r->input('address'),
            'weight' => $r->input('weight'),
            'bloodtype' => $r->input('bloodtype'),
            'disease_history' => $r->input('disease_history'),
            'status' => 'tidak aktif',
            'is_admin' => '0'
        ]);
        return redirect()->route('index');
    }

    public function login()
    {
        return view('login');
    }

    public function tentangkami(){
        return view('tentangkami', compact('r'));
    }

    public function hubungikami(){
        return view('hubungikami');
    }
}
