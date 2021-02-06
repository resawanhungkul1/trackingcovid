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
                                <form action="{{route('kota.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                   
                                    <div class="from-group">
                                        <label for="">Nama Provinsi</label>
                                      
                                        <select name="id_provinsi" id="" class="form-control" name="id_provinsi[]">
                                            @foreach ($provinsi as $item)
                                                <option value="{{$item->id}}">{{$item->nama_provinsi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="from-group">
                                        <label for="">Kode Kota</label>
                                        <input type="text" name="kode_kota" class="form-control @error ('kode_kota') is-invalid @enderror" value="{{old('kode_kota')}}" >
                                        @error('kode_kota')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                         @enderror
                                     
                                    </div>
                                    <div class="from-group">
                                        <label for="">Nama Kota</label>
                                        <input type="text" name="nama_kota" class="form-control @error ('nama_kota') is-invalid @enderror" value="{{old('nm_kota')}}" >
                                        @error('nama_kota')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                         @enderror
                                     
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