@extends('master.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-header">
                    Tambah Data Kota
                </div>
                <div class="card-body">
                    <form action="{{route('kota-store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label for="">Nama Privinsi</label>
                          
                            <select name="id_provinsi" id="" class="form-control" name="id_kota[]">
                                @foreach ($provinsi as $item)
                                    <option value="{{$item->id}}">{{$item->nm_provinsi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">kode Kota</label>
                            <input type="text" name="kode_kota" class="form-control" value="{{old('kode_kota')}}">
                         
                        </div>
                        <div class="from-group">
                            <label for="">Nama Kota</label>
                            <input type="text" name="nm_kota" class="form-control" value="{{old('nm_kota')}}">
                         
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