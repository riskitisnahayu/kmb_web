<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Daftar;
use App\Jabatan;

class KonfirmasiController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $jabatan = Jabatan::all();
        return view('daftar',compact('jabatan'));    
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [ 
        'name' => 'required', 
        'nik' => 'required|min:9', 
        'universitas' => 'required', 
        'no_telp' => 'required|min:9', 
        'alamat' => 'required',
        'jabatan_id' => 'required',
        ]); 

        Daftar::create([
          'name' => request('name'),
          'nik' => request('nik'),
          'universitas' => request('universitas'),
          'no_telp' => request('no_telp'),
          'alamat' => request('alamat'),
          'jabatan_id' => request('jabatan_id'),
          'status' => 'Belum Konfirmasi',
        ]);
        return redirect()->route('konfirmasi') 
        ->with('success','PENDAFTARAN ANDA BERHASIL'); 
    }
}
