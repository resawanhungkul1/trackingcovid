<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TampilanController extends Controller
{
    public function tampilan(Type $var = null)
    {
          $positif1 = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_positif');
           $sembuh1 = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_sembuh');
            $meninggal1 = DB::table('rws')->select('kasus2s.jumlah_positif','kasus2s.jumlah_sembuh','kasus2s.jumlah_meninggal')
                                        ->join('kasus2s','rws.id','=','kasus2s.id_rw')->sum('kasus2s.jumlah_meninggal');
            $provinsi = DB::table('provinsis')
            ->select('provinsis.nama_provinsi','provinsis.kode_provinsi',
            DB::raw('SUM(kasus2s.jumlah_positif) as jumlah_positif'),
            DB::raw('SUM(kasus2s.jumlah_sembuh) as jumlah_sembuh'),
            DB::raw('SUM(kasus2s.jumlah_meninggal) as jumlah_meninggal'))
                ->join('kotas','provinsis.id','=','kotas.id_provinsi')
                ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
                ->join('kelurahans','kecamatans.id','=','kelurahans.id_kecamatan')
                ->join('rws','kelurahans.id','=','rws.id_kelurahan')
                ->join('kasus2s','rws.id','=','kasus2s.id_rw')
            ->groupBy('provinsis.id')->get();
            $dataid = file_get_contents("https://api.kawalcorona.com/indonesia");
            $indo = json_decode($dataid, TRUE);
            $datadunia= file_get_contents("https://api.kawalcorona.com/");
      
            $dunia = json_decode($datadunia, TRUE);
        $data=[
            'title'=>'Covid',
            'global'=>$dunia,
            
            'indonesia'=>$indo,
           
            
            
            'isi'=>'tampilan'
        ];
        return view('tampilan',compact('data', 'provinsi','positif1','sembuh1','meninggal1'));
    }
    public function tampilan2(Type $var = null)
    {
        return view('tampilan2');
    }
}
