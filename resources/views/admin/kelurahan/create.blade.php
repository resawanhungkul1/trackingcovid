@extends('master.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-header">
                    Tambah Data Kecamatan
                </div>
                <div class="card-body">
                    <form action="{{route('kelurahan-store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label for="">Nama Kecamatan</label>
                          
                            <select name="id_kecamatan" id="" class="form-control" name="id_kelurahan[]">
                                @foreach ($kecamatan as $item)
                                    <option value="{{$item->id}}">{{$item->nm_kecamatan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">Nama Kelurahan</label>
                            <input type="text" name="nm_kelurahan" class="form-control" >
                         
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