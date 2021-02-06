@extends('master.master')
@push('rw')
active  
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="card">
                <div class="card-header">
                    Tambah Data Rw
                </div>
                <div class="card-body">
                    <form action="{{route('rw.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <label for="">Nama Kelurahan</label>
                          
                            <select name="id_kelurahan" id="" class="form-control" name="id_rw[]">
                                @foreach ($kelurahan as $item)
                                    <option value="{{$item->id}}">{{$item->nama_kelurahan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">Nama Rw</label>
                            <input type="text" name="nama_rw" class="form-control @error ('nama_rw') is-invalid  @enderror" value="{{old('nama_rw')}}">
                            @error('nama_rw')
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