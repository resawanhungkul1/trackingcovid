<?php

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $data=[];
    public function index()
    {
       return view('admin.dashboard.index');
    }
    public function indonesia()
    {
        $positif = DB::table('kasus2s')
        ->select('kasus2s.jumlah_positif')
        ->sum ('kasus2s.jumlah_positif');

    $sembuh = DB::table('kasus2s')    
        ->select('kasus2s.jumlah_sembuh')
        ->sum ('kasus2s.jumlah_sembuh');
    
    $meninggal = DB::table('kasus2s')    
        ->select('kasus2s.jumlah_meninggal')
        ->sum ('kasus2s.jumlah_meninggal');    
    $data=[
        'nama'=>'indonesia',
        'jumlah_positif'=>$positif,
        'jumlah_sembuh'=>$sembuh, 
        'jumlah_meninggal'=>$meninggal,
    ];
        
        return view('admin.dashboard.index',compact('positif'));
    }
    public function provinsi()
    {
        $provinsi=Provinsi::all();
        return view('admin.dashboard.index',compact('provinsi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
