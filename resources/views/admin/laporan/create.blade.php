@extends('master.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-header">
                    Tambah Data Kota
                </div>
                <div class="card-body">
                    <form action="{{route('laporan-store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label for="">Nama Rw</label>
                          
                            <select name="id_rw" id="" class="form-control" name="id_rw[]">
                                @foreach ($rw as $item)
                                    <option value="{{$item->id}}">{{$item->nm_rw}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">Jumlah Posiif</label>
                            <input type="text" name="jumlah_positif" class="form-control">
                         
                        </div>
                        <div class="from-group">
                            <label for="">Jumlah meninggal</label>
                            <input type="text" name="jumlah_meninggal" class="form-control">
                         
                        </div>
                        <div class="from-group">
                            <label for="">Jumlah sembuh</label>
                            <input type="text" name="jumlah_sembuh" class="form-control">
                         
                        </div>
                        <div class="from-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control">
                         
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" > Simpan </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection