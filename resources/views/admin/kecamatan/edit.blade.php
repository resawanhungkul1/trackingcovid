@extends('master.master')
@push('kecamatan')
active  
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                        <div class="card-header">
                                Edit Kecamatan
                            </div>
                            <div class="card-body">
                                <form action="{{route('kecamatan.update',$kecamatan->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="from-group">
                                        <label for="">Nama Kota</label>
                                      
                                        <select name="id_kota" id="" class="form-control" name="id_kota[]">
                                            @foreach ($kota as $item)
                                                <option value="{{$item->id}}" {{$item->id==$item->id_kota ? 'selected' : ''}} >{{$item->nama_kota}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="from-group">
                                        <label for="">Nama Kecamatan</label>
                                            <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" class="form-control" >
                                          
                                    </div>
               
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" > Simpan </button>
                                        <br>
                                    </div>
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection