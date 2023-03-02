<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    // protected $timestamp = 'pengaduan';
    // protected $table = 'pengaduan';
    // public $fillable = ['tgl_pengaduan', 'nik', 'isi_laporan', 'foto', 'status'];
    // // public $primeryKey = 'id_pengaduan';

    protected $table = 'pengaduan';
    protected $primaryKey = "id_pengaduan";
    protected $fillable = ['id_pengaduan','tgl_pengaduan', 'nik', 'isi_laporan', 'foto', 'status'];
}
