<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    public $timetamp = false;
    protected $table = 'masyarakats';
    protected $fillable = ['id','nik','name','email','password','telp','jenkel',
    'level','alamat','rt','rw','kodepos','province_id','regency_id','district_id','village_id'];
    protected $primarykey = 'id';
}
