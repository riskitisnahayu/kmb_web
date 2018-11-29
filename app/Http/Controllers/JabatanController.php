<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jabatan;
use Illuminate\Pagination\Paginator;

class JabatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jabatans = Jabatan::orderBy('id','DESC')->paginate(5);
        return view('jabatan.index',compact('jabatans'))
        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan.create');
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
        'nama'      => 'required',
        'deskripsi' => 'required',
        ]);
        $input = $request->all();
        $jabatan = Jabatan::create($input);
        return redirect()->route('jabatan.index')
        ->with('success','DATA JABATAN BERHASIL DITAMBAHKAN!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = Jabatan::find($id);
        return view('jabatan.edit',compact('jabatan'));
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
        'nama'      => 'required',
        'deskripsi' => 'required',
        ]);
        $input = $request->all();
        $jabatan = Jabatan::find($id);
        $jabatan->nama=$request->nama;
        $jabatan->deskripsi=$request->deskripsi;
        $jabatan->update($input);
        return redirect()->route('jabatan.index')
        ->with('success','Data Jabatan Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jabatan::find($id)->delete();
        return redirect()->route('jabatan.index')
        ->with('success','DATA JABATAN BERHASIL DIHAPUS!');
    }
}
