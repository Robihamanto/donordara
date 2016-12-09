<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $r)
    {
        $auth = [
            'username' => $r->input('username'),
            'password' => $r->input('password')
        ];

        if (!auth()->attempt($auth)) {
            return redirect()->route('login')
                ->with([
                    'status' => 'danger',
                    'title' => 'Error Login !!',
                    'message' => 'Username or Password invalid'
                ]);
        }
        if (auth()->user()->is_admin == 1) {
            return redirect()->route('admin');
        }else if (auth()->user()->is_admin == 0){
            return redirect()->route('beritauser');
        }
        return redirect()->route('index');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('index');
    }
}
