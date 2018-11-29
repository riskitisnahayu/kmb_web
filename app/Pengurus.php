<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Pesan extends Model
// {
//     //
// }

class Pengurus extends Authenticatable
{
    use Notifiable;
    protected $table = 'pengurus';
    protected $fillable = [
        'daftar_id','jabatan_id'
    ];

    public function daftar()
    {
        return $this->belongsTo('App\Daftar', 'daftar_id', 'id');
    }

    public function jabatan()
    {
        return $this->belongsTo('App\Jabatan', 'jabatan_id', 'id');
    }
}
