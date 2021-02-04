<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kasus2;
use DB;

class ApiController extends Controller
{
    public function provinsi()
    {
        $provinsi = DB::table('provinsis')
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
            
            return response([
                'success' => true,
                'data' => ['Hari Ini' => $provinsi,
                          ],
               
                'message' => 'Berhasil'
            ], 200);

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
          
          
           $this->data=[
            'nama' => 'indonesia',
            'jumlah_positif' => $positif,
            'jumlah_sembuh' => $sembuh,
            'jumlah_meninggal' => $meninggal,
          ];
    }
}
