<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Daftar extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nik', 'alamat','universitas', 'no_telp', 'jabatan_id','status'
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function jabatan()
    {
        return $this->belongsTo('App\Jabatan', 'jabatan_id', 'id');
    }
    public function pengurus()
    {
        return $this->hasOne('App\Pengurus', 'daftar_id', 'id');
    }
    /*public function jabatan()
    {
        return $this->belongsToMany('App\Jabatan', 'daftars_jabatans', 'daftar_id', 'jabatan_id');
    }*/
}
