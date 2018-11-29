<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Daftar;
use App\Jabatan;
use Illuminate\Pagination\Paginator;


class ManagePendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {

        $daftars = Daftar::orderBy('id','DESC')->where('status','Belum Konfirmasi')->paginate(10);
        $jabatan =Jabatan::all();
        return view('managependaftaran.index',compact('daftars','jabatan'))
        ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $jabatan = Jabatan::all();
        return view('managependaftaran.create',compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'nik' => 'required|min:9',
        'universitas' => 'required',
        'no_telp' => 'required|min:9',
        'alamat' => 'required',
        'jabatan_id' => 'required',
        //'divisi2' => 'required',
        ]);


        Daftar::create([
          'name' => request('name'),
          'nik' => request('nik'),
          'universitas' => request('universitas'),
          'no_telp' => request('no_telp'),
          'alamat' => request('alamat'),
          'jabatan_id' => request('jabatan_id'),
          'status' => 'Belum Konfirmasi',
        /*])->jabatan()->createMany([
            [
                'deskripsi' => request('divisi1_id')
            ],
            [
                'jabatan_id' => request('divisi2_id')
            ]*/
        ]);
        return redirect()->route('pendaftaran.index')
        ->with('success','PENDAFTARAN ANGGOTA BARU BERHASIL DITAMBAHKAN!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftar = Daftar::find($id);
        $jabatan = Jabatan::all();
        return view('managependaftaran.show',compact('daftar','jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftar = Daftar::find($id);
        $jabatan = Jabatan::all();
        return view('managependaftaran.edit',compact('daftar','jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'name' => 'required',
        'nik' => 'required|min:9',
        'universitas' => 'required',
        'no_telp' => 'required|min:9',
        'alamat' => 'required',
        //'divisi1' => 'required',
        //'divisi2' => 'required',
        ]);
        $daftar = Daftar::find($id);
        $daftar->name = $request->name;
        $daftar->nik = $request->nik;
        $daftar->universitas = $request->universitas;
        $daftar->no_telp = $request->no_telp;
        $daftar->alamat = $request->alamat;
        $daftar->jabatan_id = $request->jabatan_id;
        $daftar->save();
        return redirect()->route('pendaftaran.index')
        ->with('success','Daftar Berhasil Diupdate!');
    }

    public function aktif(Request $request, $id)
    {
        $daftar = Daftar::find($id);
        $daftar->status = "Konfirmasi";
        $daftar->save();
        return redirect()->route('pendaftaran.index')
        ->with('success','Pendaftar Berhasil Diaktifkan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Daftar::find($id)->delete();
        return redirect()->route('pendaftaran.index')
        ->with('success','DATA PENDAFTARAN BERHASIL DIHAPUS!');
    }
}
