<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Tanggapan;
use Iluminate\Support\Facades\DB;
class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggapan = Tanggapan::all();
        $pengaduan = Pengaduan::all();
        return view('pengaduan.index', compact('pengaduan','tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.create', compact('pengaduan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required',
            'status' => 'required'

        ]);
        $imgName = $request->foto->getClientOriginalName() . '-' . time() . '-' . $request->foto->extension();
        $request->foto->move(public_path('image'),$imgName);

        Pengaduan::create([
            'tgl_pengaduan' => $request->tgl_pengaduan,
            'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $imgName,
            'status' => $request->status

        ]);

    	return redirect('/index')->with('toast_success', 'Data Berhasil Tersimpan!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();

        Pengaduan::where('id_pengaduan','$id')->delete();
        return redirect('/index')->with('info', 'Data Berhasil Dihapus');
    }
    public function cetakform(){
        return view('pengaduan.cetak');
    }
    public function cetak_pdf($id){
        // dd(["Tanggal awal: ".$tglawal, "Tanggal akhir: ".$tglakhir]);
        $pengaduan= Pengaduan::find($id);
        return view('pengaduan.cetak-pengaduan-pertanggal', compact('pengaduan'));
    }
}
