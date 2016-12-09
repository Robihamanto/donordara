<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Informasi;
use App\StokDarah;
use App\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(Request $r){
        $data = $r->all();
        return view('user',compact('data'));
    }

    public function datapendonor(){
        $data = Users::where('is_admin', false)->get();
        return view ('datapendonor', compact('data'));
    }

    public function submitkomentar(Request $r){
        $data = Comment::create([
           'information_id' => $r->input('information_id'),
            'user_id' => auth()->user()->id,
            'comment' => $r->input('komentar')
        ]);
        return redirect()->route('beritauser');
    }

    public function berita(){
        $data = Informasi::where('user_id', 1)->get();
        return view('beritauser', compact('data'));
    }

    public function stokdarah(){
        $data = StokDarah::where('user_id', '>', 1)->get();
        return view('stokdarahuser', compact('data'));
    }

}
