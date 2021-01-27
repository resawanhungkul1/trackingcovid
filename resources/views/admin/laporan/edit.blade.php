@extends('master.master')
@push('laporan')
active  
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                        <div class="card-header">
                                Tambah Data Kota
                            </div>
                            <div class="card-body">
                                <form action="{{route('laporan-update',$laporan->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="from-group">
                                        <label for="">Nama Rw</label>
                                      
                                        <select name="id_rw" id="" class="form-control" name="id_rw[]">
                                            @foreach ($rw as $item)
                                                <option value="{{$item->id}}" {{$item->id==$laporan->id_rw ? 'selected' : ''}}>{{$item->nm_rw}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="from-group">
                                        <label for="">Jumlah Posiif</label>
                                        <input type="text" name="jumlah_positif" class="form-control" value="{{$laporan->jumlah_positif}}">
                                     
                                    </div>
                                    <div class="from-group">
                                        <label for="">Jumlah meninggal</label>
                                        <input type="text" name="jumlah_meninggal" class="form-control" value="{{$laporan->jumlah_meninggal}}">
                                     
                                    </div>
                                    <div class="from-group">
                                        <label for="">Jumlah sembuh</label>
                                        <input type="text" name="jumlah_sembuh" class="form-control" value="{{$laporan->jumlah_sembuh}}">
                                     
                                    </div>
                                    <div class="from-group">
                                        <label for="">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" value="{{$laporan->tanggal}}">
                                     
                                    </div>
            
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" > Simpan </button>
                                    </div>
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection