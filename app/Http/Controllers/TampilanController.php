<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class TampilanController extends Controller
{
    public function tampilan(Type $var = null)
    {




        // $global = file_get_contents('https://api.kawalcorona.com/positif');
        // $posglobal = json_decode($global, TRUE);

        // Date
        $tanggal = Carbon::now()->format('D d-M-Y H:i:s');

        // Table Provinsi
        $provinsi = DB::table('provinsis')
                ->select(
                    'provinsis.id',
                    'provinsis.nama_provinsi',
                    'provinsis.kode_provinsi',
                    DB::raw('sum(kasus2s.Jumlah_positif) as jumlah_positif'),
                    DB::raw('sum(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
                    DB::raw('sum(kasus2s.jumlah_meninggal) as jumlah_meninggal')
                )
                  ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
                  ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
                  ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
                  ->join('rws', 'rws.id_kelurahan', '=', 'kelurahans.id')
                  ->join('kasus2s', 'kasus2s.id_rw', '=', 'rws.id')

                  ->groupBy('nama_provinsi')->orderBy('nama_provinsi', 'ASC')
                  ->get();

        // Table Global
        // $datadunia= file_get_contents("https://api.kawalcorona.com/");
        // $dunia = json_decode($datadunia, TRUE);
            
      

        return view('tampilan', compact('provinsi', 'positif1', 'sembuh1', 'meninggal1', 'tanggal'));
    }
    public function tampilan2(Type $var = null)
    {
        $positif1 = DB::table('rws')->select('kasus2s.jumlah_positif', 'kasus2s.jumlah_sembuh', 'kasus2s.jumlah_meninggal')
                                        ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
        $sembuh1 = DB::table('rws')->select('kasus2s.jumlah_positif', 'kasus2s.jumlah_sembuh', 'kasus2s.jumlah_meninggal')
                                        ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');
        $meninggal1 = DB::table('rws')->select('kasus2s.jumlah_positif', 'kasus2s.jumlah_sembuh', 'kasus2s.jumlah_meninggal')
                                        ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');
        $provinsi = DB::table('provinsis')
            ->select(
                'provinsis.nama_provinsi',
                'provinsis.kode_provinsi',
                DB::raw('SUM(kasus2s.jumlah_positif) as jumlah_positif'),
                DB::raw('SUM(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
                DB::raw('SUM(kasus2s.jumlah_meninggal) as jumlah_meninggal')
            )
                ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
                ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('kelurahans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                ->join('rws', 'kelurahans.id', '=', 'rws.id_kelurahan')
                ->join('kasus2s', 'rws.id', '=', 'kasus2s.id_rw')
            ->groupBy('provinsis.id')->get();
        $dataid = file_get_contents("https://api.kawalcorona.com/indonesia");
        $indo = json_decode($dataid, true);
        $datadunia= file_get_contents("https://api.kawalcorona.com/");
      
        $dunia = json_decode($datadunia, true);
        $data=[
            'title'=>'Covid',
            'global'=>$dunia,
            
            'indonesia'=>$indo,
           
            
            
            'isi'=>'tampilan'
        ];
        return view('tampilan2', compact('data', 'provinsi', 'positif1', 'sembuh1', 'meninggal1'));
    }
}
