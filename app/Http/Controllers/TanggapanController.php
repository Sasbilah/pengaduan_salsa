<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanggapan;
class TanggapanController extends Controller
{
    public function index()
    {
        $tanggapan = Tanggapan::all();
        return view('tanggapan.index', compact('tanggapan'));

    }

    public function create()
    {
        return view('/tanggapan/create');
    }
    public function store(Request $request)
    {
        Tanggapan::create([
    		'id_tanggapan' => $request->id_tanggapan,
    		// 'id_pengaduan' => $request->id_pengaduan,
            'tgl_tanggapan' => $request->tgl_tanggapan,
    		'tanggapan' => $request->tanggapan,
            'nik' => $request->nik,

            
    	]);
 
    	return redirect('/tanggapan/index')->with('toast_success', 'Data Berhasil Tersimpan!');;
    }
}
