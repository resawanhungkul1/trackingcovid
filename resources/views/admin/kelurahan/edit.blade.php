@extends('master.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="{{route('kelurahan-update',$kelurahan->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="from-group">
                            <label for="">Nama Kecamatan</label>
                          
                            <select name="id_kecamatan" id="" class="form-control" name="id_kecamatan[]">
                                @foreach ($kecamatan as $item)
                                    <option value="{{$item->id}}" {{$item->id==$item->id_kecamatan ? 'selected' : ''}} >{{$item->nm_kecamatan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">Nama kelurahan</label>
                                <input type="text" name="nm_kelurahan" value="{{$kelurahan->nm_kelurahan}}" class="form-control" >
                         
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