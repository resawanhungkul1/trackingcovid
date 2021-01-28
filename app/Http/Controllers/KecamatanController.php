<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;
use Validator;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan=Kecamatan::with('kota')->get();
        return view('admin.kecamatan.index',compact('kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kota=Kota::all();
        return view('admin.kecamatan.create',compact('kota'));
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
            'kode_kecamatan.required' => 'Kode Kecamatan Harus Diisi',
            'kode_kecamatan.max' => 'Kode sudah Maximal',
            'kode_kecamatan.numeric' => 'Kode Harus Angka',
            'nm_kecamatan.alpha'=> 'Nama Kecamatan Tidak Boleh menggunakan Angka',
            'nm_kecamatan.required' => 'Nama Harus Di isi',
            'nm_kecamatan.unique' => 'Data Sudah Ada'
         
         
        
        ];
        $this->validate($request,[
          
            'kode_kecamatan' => 'required|max:100|numeric',
            'nm_kecamatan' => 'required|alpha|unique:kecamatans'
        ],$pesan);
        $kecamatan=new Kecamatan();
        $kecamatan->id_kota=$request->id_kota;
        $kecamatan->kode_kecamatan=$request->kode_kecamatan;
        $kecamatan->nm_kecamatan=$request->nm_kecamatan;
        $kecamatan->save();
        return redirect()->route('kecamatan')->with(['succes'=>'Data Berhasil Di simpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kecamatan=Kecamatan::findOrFail($id);
        $kota=Kota::all();
        return view('admin.kecamatan.edit',compact('kecamatan','kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $kecamatan=Kecamatan::findOrFail($id);
        $kecamatan->id_kota=$request->id_kota;
        $kecamatan->kode_kecamatan=$request->kode_kecamatan;
        $kecamatan->nm_kecamatan=$request->nm_kecamatan;
        $kecamatan->save();
        return redirect()->route('kecamatan')->with(['succes'=>'Data Berhasil Di Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kecamatan=Kecamatan::findOrFail($id);
        $kecamatan->delete();
        return redirect()->route('kecamatan')->with(['succes'=>'Data Berhasil Di Hapus']);
    }
}
