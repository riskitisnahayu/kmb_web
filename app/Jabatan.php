<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatans';
    protected $fillable = ['id','nama', 'deskripsi'];
    public $timestamps = false;
    //protected $dates = ['deleted_at', 'tanggal_lahir'];


    public function daftar()
    {
        return $this->hasMany('App\Daftar', 'jabatan_id', 'id');
    }

    public function pengurus()
    {
        return $this->hasMany('App\Pengurus', 'jabatan_id', 'id');
    }

    /*public function jabatan()
    {
        return $this->belongsToMany('App\Jabatan', 'daftars_jabatans', 'daftar_id', 'jabatan_id');
    }*/
}
