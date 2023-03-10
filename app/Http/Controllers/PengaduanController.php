<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::paginate(2);
        return view('pengaduan.index', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $this->validate($request,[
    	// 	'tgl_pengaduan' => 'required',
    	// 	'nik' => 'required',
        //     'isi_laporan' => 'required',
    	// 	'foto' => 'required',
        //     'status' => 'required'
    	// ]);
 
        Pengaduan::create([
    		'tgl_pengaduan' => $request->tgl_pengaduan,
    		'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
    		'foto' => $request->foto,
            'status' => $request->status,

            
    	]);
 
    	return redirect('index')->with('toast_success', 'Data Berhasil Tersimpan!');;
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
        Pengaduan::where('id_pengaduan',$id)->delete();
        return redirect('/index')->with('info', 'Data Berhasil Dihapus');
    }
}
