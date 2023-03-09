<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    public $timetamp = false;
    protected $table = 'tanggapan';
    protected $fillable = ['id_tanggapan','tgl_tanggapan','tanggapan','nik'];
    protected $primarykey = 'id_tanggapan';
}
