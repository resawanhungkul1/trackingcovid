<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelurahan=Kelurahan::with('kecamatan')->get();
        return view('admin.kelurahan.index',compact('kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan=Kecamatan::all();
        return view('admin.kelurahan.create',compact('kecamatan'));
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
           
            'nm_kelurahan.required' => 'Kelurahan Harus Di isi',
            'nm_kelurahan.unique' => 'Kelurahan Sudah ada'
        
        ];
        $this->validate($request,[
          
            'nm_kelurahan' => 'required|nm_kelurahan:unique'
        ],$pesan);
        $kelurahan=new Kelurahan();
        $kelurahan->id_kecamatan=$request->id_kecamatan;
        $kelurahan->nm_kelurahan=$request->nm_kelurahan;
        $kelurahan->save();
        return redirect()->route('kelurahan')->with(['succes'=>'Data Berhasil Di Tambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function show(Kelurahan $kelurahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelurahan=Kelurahan::findOrFail($id);
        $kecamatan=Kecamatan::all();
        return view('admin.kelurahan.edit',compact('kelurahan','kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $kelurahan= Kelurahan::findOrFail($id);
        $kelurahan->id_kecamatan=$request->id_kecamatan;
        $kelurahan->nm_kelurahan=$request->nm_kelurahan;
        $kelurahan->save();
        return redirect()->route('kelurahan')->with(['succes'=>'Data Berhasil Di Edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelurahan  $kelurahan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelurahan=Kelurahan::findOrFail($id);
        $kelurahan->delete();
        return redirect()->route('kelurahan')->with(['succes'=>'Data Berhasil Di Hapus']);
    }
}
