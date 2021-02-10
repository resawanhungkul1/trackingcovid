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
    public function corona()
    {
            $datapositif = file_get_contents("https://api.kawalcorona.com/positif");
            $positif = json_decode($datapositif, TRUE);
            $datasembuh = file_get_contents("https://api.kawalcorona.com/sembuh");
            $sembuh = json_decode($datasembuh, TRUE);
            $datameninggal = file_get_contents("https://api.kawalcorona.com/meninggal");
            $meninggal = json_decode($datameninggal, TRUE);
            $dataid = file_get_contents("https://api.kawalcorona.com/indonesia");
            $id = json_decode($dataid, TRUE);
            $dataidprovinsi = file_get_contents("https://api.kawalcorona.com/indonesia/provinsi");
            $idprovinsi = json_decode($dataidprovinsi, TRUE);
            $datadunia= file_get_contents("https://api.kawalcorona.com/");
            $dunia = json_decode($datadunia, TRUE);
            $data=[
                'title'=>'global',
                'positif'=>$positif,
                'sembuh'=>$sembuh,
                'meninggal'=>$meninggal,
                'isi'=>'    '
            ];
    }
    public function index()
    {
       return view('admin.dashboard.index2');
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
        $nasional =json_decode (file_get_contents("https://api.kawalcorona.com/indonesia"),TRUE) ;
        $indonesia =json_decode (file_get_contents("http://127.0.0.1:8000/api/indonesia"),TRUE) ;
        $positif = DB::table('kasus2s')
        ->select('kasus2s.jumlah_positif')
        ->sum ('kasus2s.jumlah_positif');

        $sembuh = DB::table('kasus2s')    
            ->select('kasus2s.jumlah_sembuh')
            ->sum ('kasus2s.jumlah_sembuh');
        
        $meninggal = DB::table('kasus2s')    
            ->select('kasus2s.jumlah_meninggal')
            ->sum ('kasus2s.jumlah_meninggal'); 
        $all = DB::table('provinsis')
        ->select('provinsis.nama_provinsi','provinsis.kode_provinsi',
        DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
        DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
        DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
            ->join('kotas','provinsis.id','=','kotas.id_provinsi')
            ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
            ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
            ->join('rws','kelurahans.id','=','rws.id_kelurahan')
            ->join('kasus2s','rws.id','=','kasus2s.id_rw')
        ->groupBy('provinsis.id')->get();
        $data=[
            'title'=>'Covid',
            'nasional'=>$nasional,
            
            'provinsi'=>$all,
            'isi'=>'index2'
        ];
        return view('admin.dashboard.index3',compact('data'));

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
