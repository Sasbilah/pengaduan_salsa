<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 'nama','email', 'password', 'telp','jenkel','level','alamat','rt','rw','kode_pos','province_id',
        'regency_id','district_id','village_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
