<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    public $timetamp = false;
    protected $table = 'tanggapan';
    protected $fillable = ['id_tanggapan','id_pengaduan','tgl_tanggapan','tanggapan','nik'];
    protected $primaryKey = 'id_tanggapan';

    public function pengaduan()
    {
        return $this->hasOne('App\Pengaduan','isi_laporan');
    }
}
