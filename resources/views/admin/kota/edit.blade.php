@extends('master.master')
@push('kota')
active  
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                        <div class="card-header">
                                Edit Data Kota
                            </div>
                            <div class="card-body">
                                <form action="{{route('kota.update',$kota->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="from-group">
                                        <label for="">Nama Privinsi</label>
                                      
                                        <select name="id_provinsi" id="" class="form-control" name="id_provinsi[]">
                                            @foreach ($provinsi as $item)
                                                <option value="{{$item->id}}" {{$item->id==$kota->id_provinsi ? 'selected' : ''}}>{{$item->nama_provinsi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="from-group">
                                        <label for="">Kode Kota</label>
                                        <input type="text" name="kode_kota" class="form-control" value="{{$kota->kode_kota}}">
                                     
                                    </div>
                                    <div class="from-group">
                                        <label for="">Nama Kota</label>
                                        <input type="text" name="nama_kota" class="form-control" value="{{$kota->nama_kota}}">
                                     
                                    </div>
                                    <br>
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