<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function postlogin (Request $request){
        // dd($request->all());
        if (Auth::attemp($request->only('email','password'))){
            return redirect('HalamanDepan,beranda');
        }
        return redirect ('login');
    }
}
