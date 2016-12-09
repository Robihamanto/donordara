<?php

namespace App\Http\Controllers;

use App\Halaman;
use App\Informasi;
use App\StokDarah;
use App\Users;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin()
    {
        return $this->keloladatapendonor();
    }

    public function kelolaberanda()
    {
        return view('kelolaberanda');
    }

    public function kelolaberita()
    {
        $data = Informasi::all();
        return view('kelolaberita', compact('data'));
    }
    public function editberita($id)
    {
        $data = Informasi::where('id', $id)->get();
        return view('editberita', compact('data'));
    }
    public function editberitaproses(Request $r)
    {
        $data = Informasi::where('id', $r->id)->update([
            'title' => $r->input('title'),
            'content' => $r->input('content')
            ]);
        return redirect()->route('editberita', $r->id);
    }

    public function tambahberita()
    {
        return view('tambahberita');
    }

    public function tambahberitaproses(Request $r)
    {
        $newdata = Informasi::create([
            'user_id' => auth()->user()->id,
            'title' => $r->input('title'),
            'content' => $r->input('content')
        ]);
        return redirect()->route('kelolaberita');
    }

    public function deleteberita($id)
    {
        $data = Informasi::find($id);
        $data->delete();
        return redirect()->route('kelolaberita');
    }

    public function kelolacalonpendonor()
    {
        $data = Users::where('status', 'tidak aktif')->get();
        return view('kelolacalonpendonor', compact('data'));
    }
    public function aktifkan($id){
        $updatedata = Users::where('id', $id)->update(['status' => 'aktif']);
        return redirect()->route('kelolacalonpendonor');
    }

    public function hapuscalonpendonor($id){
        $data = Users::find($id);
        $data->delete();
        return redirect()->route('kelolacalonpendonor');
    }
    public function keloladatapendonor()
    {
        $data = Users::where('status', 'aktif')->get();
        return view('keloladatapendonor', compact('data'));
    }

    public function kelolapendonor()
    {
        return view('kelolapendonor');
    }

    public function editdatapendonor($id)
    {
        $data = Users::where('id', $id)->get();
        return view('editdatapendonor', compact('data'));
    }
    public function editdatapendonorproses(Request $r)
    {
        $updatedata = Users::where('id', $r->id)->update([
            'fullname' => $r->input('fullname'),
            'pob' => $r->input('pob'),
            'dob' => $r->input('dob'),
            'phonenumber' => $r->input('phonenumber'),
            'address' => $r->input('address'),
            'weight' => $r->input('weight'),
            'disease_history' => $r->input('disease_history')
            ]);
        return redirect()->route('editdatapendonor', $r->id);
    }

    public function kelolapesanmasuk()
    {
        return view('kelolapesanmasuk');
    }

    public function kelolastokdarah()
    {
        $data = StokDarah::where('user_id', '>', 1)->get();
        return view('kelolastokdarah', compact('data'));
    }

    public function updatestok(){
        $data = User::where('is_admin', false)->get();
        return view('updatestok', compact('data'));
    }

    public function updatestokproses(Request $r){
        $newdata = StokDarah::create([
            'user_id' => $r->input('id'),
            'total' => $r->input('total'),
            'status' => $r->input('status')
        ]);
        return $this->kelolastokdarah();
    }

    public function kelolatentangkami()
    {
        return view('kelolatentangkami');
    }


}
