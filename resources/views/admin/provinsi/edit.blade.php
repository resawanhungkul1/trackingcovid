@extends('master.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-header">
                    Tambah Data Provinsi
                </div>
                <div class="card-body">
                    <form action="{{route('provinsi-update',$provinsi->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="from-group">
                            <label for="">Kode Privinsi</label>
                            <input type="text" name="kode_provinsi" class="form-control" value="{{$provinsi->kode_provinsi}}">
                         
                        </div>
                        <div class="from-group">
                            <label for="">Nama Privinsi</label>
                            <input type="text" name="nama_provinsi" class="form-control" value="{{$provinsi->nm_provinsi}}">
                         
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