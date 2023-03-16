<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanggapan;
use App\Pengaduan;
class TanggapanController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::all();
        $tanggapan = Tanggapan::all();
        return view('tanggapan.index',compact('tanggapan','pengaduan'));

    }

    public function create()
    {
        $pengaduan = Pengaduan::get();
        $tanggapan = Tanggapan::all();
        return view('tanggapan.create', compact('pengaduan','tanggapan'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_pengaduan' => 'required',
            'tgl_tanggapan' => 'required',
            'tanggapan' => 'required',
            'nik'=>'required'
        ]);

        Tanggapan::create([
            'id_pengaduan' => $request->id_pengaduan,
            'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'nik' => $request->nik,
        ]);
 
    	return redirect('/tanggapan/index')->with('toast_success', 'Data Berhasil Tersimpan!');;
    }

    public function destroy($id_tanggapan)
    {
        //$tanggapan = Tanggapan::find($id_tanggapan);
        //$tanggapan->delete();
        $tanggapan = Tanggapan::find($id_tanggapan);
        $tanggapan->delete();
        return redirect('/tanggapan/index')->with('info', 'Data Berhasil Dihapus');
        
    }

}


