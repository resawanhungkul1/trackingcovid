<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rw=Rw::with('kelurahan')->get();
        return view('admin.rw.index',compact('rw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelurahan=Kelurahan::all();
        return view('admin.rw.create',compact('kelurahan'));
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
            'nama_rw.max' => 'Nama Terlalu panjang',          
            'nama_rw.required' => 'Rw Harus Di isi',
        
            
         
        
        ];
        $this->validate($request,[
          
            
            'nama_rw' => 'required|max:100'
        ],$pesan);
        $rw=new Rw();
        $rw->id_kelurahan=$request->id_kelurahan;
        $rw->nama_rw=$request->nama_rw;
        $rw->save();
        return redirect()->route('rw.index')->with(['succes'=>'Data Berhasil Di Tambah']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show(Rw $rw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rw=Rw::findOrFail($id);
        $kelurahan=Kelurahan::all();
        return view('admin.rw.edit',compact('rw','kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $rw= Rw::findOrFail($id);
        $rw->id_kelurahan=$request->id_kelurahan;
        $rw->nama_rw=$request->nama_rw;
        $rw->save();
        return redirect()->route('rw.index')->with(['succes'=>'Data Berhasil Di Edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rw=Rw::findOrFail($id);
        $rw->delete();
        return redirect()->route('rw.index')->with(['succes'=>'Data Berhasil Di Hapus']);
    }
}
