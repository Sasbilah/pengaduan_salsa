<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function postlogin (Request $request) {
        if (Auth::attempt($request->only('name','email','password'))){
            return redirect('HalamaDepan.beranda');
        }
return redirect('login');

    }
}
