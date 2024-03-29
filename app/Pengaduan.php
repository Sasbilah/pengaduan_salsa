<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey = "id_pengaduan";
    protected $fillable = ['id_pengaduan','tgl_pengaduan', 'nik', 'isi_laporan', 'foto', 'status'];

    public function tanggapan()
    {
        return $this->belongsTo('App\Tanggapan','id_tanggapan','id_tanggapan');
    }
}
