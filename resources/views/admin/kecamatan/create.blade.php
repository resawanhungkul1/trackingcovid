@extends('master.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-header">
                    Tambah Data Kecamatan
                </div>
                <div class="card-body">
                    <form action="{{route('kecamatan-store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label for="">Nama Kota</label>
                          
                            <select name="id_kota" id="" class="form-control" name="id_kecamatan[]">
                                @foreach ($kota as $item)
                                    <option value="{{$item->id}}">{{$item->nm_kota}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">Nama Kecamatan</label>
                            <input type="text" name="nm_kecamatan" class="form-control" >
                         
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