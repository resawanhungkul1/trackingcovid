<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Validator;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi= Provinsi::all();
        return view('admin.provinsi.index',compact('provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesan=[
            'nama_provinsi.required' => 'provinsi Harus Diisi',
            'nama_provinsi.max' => 'provinsi sudah Maximal',
        
        ];
        $this->validate($request,[
          
            'nama_provinsi' => 'required|max:50'
        ],$pesan);
        $provinsi = new Provinsi();
        $provinsi->nm_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi')
                ->with(['succes'=>'provinsi berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function show(Provinsi $provinsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinsi= Provinsi::findOrFail($id);
        return view('admin.provinsi.edit',compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->nm_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi')
                ->with(['succes'=>'provinsi berhasil update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $provinsi=Provinsi::findOrFail($id);
        $provinsi->delete();
        return redirect()->route('provinsi')->with(['succes'=>'Data Berhasil Di hapus']);
    }
}
