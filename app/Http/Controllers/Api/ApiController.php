<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\kecamatan;
use App\Models\Kasus2;
use DB;
use Carbon\Carbon;
use GuzzleHttp\Client;

class ApiController extends Controller
{

    public $data = [];
    public function global()
    {
        
        $response = Http::get( 'https://api.kawalcorona.com/global/' )->json();
        foreach ($response as $data => $val){
            $raw =$val['attributes'];
            $res = [
                'Negara' => $raw['Country_Region'],
                'Positif' => $raw ['Confirmed'],
                'Sembuh' => $raw ['Recovered'],
                'meninggal' => $raw ['Deaths']
            ];
            array_push($this->data, $res);
         }
            $data = [
                'success' => true,
                'data' => $this->data,
                'message' => 'berhasil'
            ];
            return response()->json($data,200);

    }
    public function provinsi()
    {
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
            $toDay = DB::table('provinsis')
            ->select('provinsis.nama_provinsi','provinsis.kode_provinsi',
            DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
            DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
            DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
                ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->whereDate('kasus2s.tanggal',Carbon::today())
            ->groupBy('provinsis.id')->get(); 
            
            return response([
                'success' => true,
                'data' => ['Hari Ini' => $toDay,
                            'Semua' => $all
                          ],
               
                'message' => 'Berhasil'
            ], 200);

    }
    public function show($id)
    {
        $provinsi = Provinsi::findOrFail($id);
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
                ->where('provinsis.id',$id)
                ->groupBy('provinsis.id')
                ->get();
         $toDay = DB::table('provinsis')
            ->select('provinsis.nama_provinsi','provinsis.kode_provinsi',
            DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
            DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
            DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
                ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
                ->where('provinsis.id',$id)
                ->whereDate('kasus2s.tanggal',Carbon::today())
                ->groupBy('provinsis.id')
             
                ->get();
                       
                return response([
                    'success' => true,
                    'data' => ['Hari Ini' => $toDay,
                                'Semua' => $all
                              ],
                   
                    'message' => 'Berhasil'
                ], 200);

    }
    public function kota()
    {
        $allDay = DB::table('kotas')
          ->select('kotas.nama_kota','kotas.kode_kota',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
              ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
          ->groupBy('kotas.id')->get();

          $toDay = DB::table('kotas')
          ->select('kotas.nama_kota','kotas.kode_kota',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
              ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->whereDate('kasus2s.tanggal',Carbon::today())
          ->groupBy('kotas.id')->get();  
       
          $positif = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
           $sembuh = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');
            $meninggal = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');
        // dd($provinsi);
        return response([
            'success' => true,
            'data' => [
                        'Hari Ini' => $toDay,
                        'Semua' => $allDay

                        ],

        ]);

    }
    public function showkota($id)
    {
        $kota=Kota::findOrFail($id);
        $allDay = DB::table('kotas')
          ->select('kotas.nama_kota','kotas.kode_kota',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
              ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->where('kotas.id',$id)
          ->groupBy('kotas.id')->get();

          $toDay = DB::table('kotas')
          ->select('kotas.nama_kota','kotas.kode_kota',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
              ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->where('kotas.id',$id)
              ->whereDate('kasus2s.tanggal',Carbon::today())
          ->groupBy('kotas.id')->get();  
       
          $positif = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
           $sembuh = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');
            $meninggal = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');
        // dd($provinsi);
        return response([
            'success' => true,
            'data' => [
                        'Hari Ini' => $toDay,
                        'Semua' => $allDay

                        ],
        ]);

    }
    public function kecamatan()
    {
        $allDay = DB::table('kecamatans')
          ->select('kecamatans.nama_kecamatan','kecamatans.kode_kecamatan',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
          ->groupBy('kecamatans.id')->get();

          $toDay = DB::table('kecamatans')
          ->select('kecamatans.nama_kecamatan','kecamatans.kode_kecamatan',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->whereDate('kasus2s.tanggal',Carbon::today())
          ->groupBy('kecamatans.id')->get();  
       
          $positif = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
           $sembuh = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');
            $meninggal = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');
        // dd($provinsi);
        return response([
            'success' => true,
            'data' => [
                        'Hari Ini' => $toDay,
                        'Semua' => $allDay

                        ],

        ]);

    }
    public function showkecamatan($id)
    {
        $kecamatan=Kecamatan::findOrFail($id);
        $allDay = DB::table('kecamatans')
          ->select('kecamatans.nama_kecamatan','kecamatans.kode_kecamatan',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->where('kecamatans.id',$id)
          ->groupBy('kecamatans.id')->get();

          $toDay = DB::table('kecamatans')
          ->select('kecamatans.nama_kecamatan','kecamatans.kode_kecamatan',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->where('kecamatans.id',$id)
              ->whereDate('kasus2s.tanggal',Carbon::today())
          ->groupBy('kecamatans.id')->get();  
       
          $positif = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
           $sembuh = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');
            $meninggal = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');
        // dd($provinsi);
        return response([
            'success' => true,
            'data' => [
                        'Hari Ini' => $toDay,
                        'Semua' => $allDay

                        ],

        ]);

    }
    public function kelurahan()
    {
        $allDay = DB::table('kelurahans')
          ->select('kelurahans.nama_kelurahan',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
          ->groupBy('kelurahans.id')->get();

          $toDay = DB::table('kelurahans')
          ->select('kelurahans.nama_kelurahan',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->whereDate('kasus2s.tanggal',Carbon::today())
          ->groupBy('kelurahans.id')->get();  
       
          $positif = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
           $sembuh = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');
            $meninggal = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');
        // dd($provinsi);
        return response([
            'success' => true,
            'data' => [
                        'Hari Ini' => $toDay,
                        'Semua' => $allDay

                        ],

        ]);

    }
    public function showkelurahan($id)
    {
        $allDay = DB::table('kelurahans')
          ->select('kelurahans.nama_kelurahan',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->where('kelurahans.id',$id)
          ->groupBy('kelurahans.id')->get();

          $toDay = DB::table('kelurahans')
          ->select('kelurahans.nama_kelurahan',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('rws','kelurahans.id','=','rws.id_kelurahan')
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->where('kelurahans.id',$id)
              ->whereDate('kasus2s.tanggal',Carbon::today())
          ->groupBy('kelurahans.id')->get();  
       
          $positif = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
           $sembuh = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');
            $meninggal = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');
        // dd($provinsi);
        return response([
            'success' => true,
            'data' => [
                        'Hari Ini' => $toDay,
                        'Semua' => $allDay

                        ],

        ]);

    }
    public function rw()
    {
        $allDay = DB::table('rws')
          ->select('rws.nama_rw',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
          ->groupBy('rws.id')->get();

          $toDay = DB::table('rws')
          ->select('rws.nama_rw',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->whereDate('kasus2s.tanggal',Carbon::today())
          ->groupBy('rws.id')->get();  
       
          $positif = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
           $sembuh = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');
            $meninggal = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');
        // dd($provinsi);
        return response([
            'success' => true,
            'data' => [
                        'Hari Ini' => $toDay,
                        'Rw' => $allDay

                        ],

        ]);

    }
    public function showrw($id)
    {
        $allDay = DB::table('rws')
          ->select('rws.nama_rw',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->where('rws.id',$id)
          ->groupBy('rws.id')->get();

          $toDay = DB::table('rws')
          ->select('rws.nama_rw',
          DB::raw('SUM(kasus2s.jumlah_positif) as Positif'),
          DB::raw('SUM(kasus2s.jumlah_sembuh) as Sembuh'),
          DB::raw('SUM(kasus2s.jumlah_meninggal) as Meninggal'))
              ->join('kasus2s','rws.id','=','kasus2s.id_rw')
              ->where('rws.id',$id)
              ->whereDate('kasus2s.tanggal',Carbon::today())
          ->groupBy('rws.id')->get();  
       
          $positif = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
           $sembuh = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');
            $meninggal = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');
        // dd($provinsi);
        return response([
            'success' => true,
            'data' => [
                        'Hari Ini' => $toDay,
                        'Rw' => $allDay

                        ],

        ]);

    }
    

    public function positif()
    {
      $positif = DB::table('kasus2s')
          ->select('kasus2s.jumlah_positif')
          ->sum ('kasus2s.jumlah_positif');
          
        return response([
            'success' => true,
            'data' => ['name' => 'total positif',
            'value' => $positif,
                    ],       
            'message' => 'Berhasil'
        ], 200);
    }      
      
    public function sembuh()
    {
      $sembuh = DB::table('kasus2s')
          ->select('kasus2s.jumlah_sembuh')
          ->sum ('kasus2s.jumlah_sembuh');
          
          return response([
            'success' => true,
            'data' => ['name' => 'total sembuh',
            'value' => $sembuh,
                    ],       
            'message' => 'Berhasil'
        ], 200);
    }
    
    public function meninggal()
    {
      $meninggal = DB::table('kasus2s')
          ->select('kasus2s.jumlah_meninggal')
          ->sum ('kasus2s.jumlah_meninggal');
          
          return response([
            'success' => true,
            'data' => ['name' => 'total meninggal',
            'value' => $meninggal,
                    ],       
            'message' => 'Berhasil'
        ], 200);
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
          
          
          return response([
            'nama' => 'indonesia',
            'jumlah_positif' => $positif,
            'jumlah_sembuh' => $sembuh,
            'jumlah_meninggal' => $meninggal,
          ],200);
    }
}
