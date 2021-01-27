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
                                Edit Data
                            </div>
                            <div class="card-body">
                                <form action="{{route('rw-update',$rw->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="from-group">
                                        <label for="">Nama Kelurahan</label>
                                      
                                        <select name="id_kelurahan" id="" class="form-control" name="id_kelurahan[]">
                                            @foreach ($kelurahan as $item)
                                                <option value="{{$item->id}}" {{$item->id==$item->id_kelurahan ? 'selected' : ''}} >{{$item->nm_kelurahan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="from-group">
                                        <label for="">Nama Rw</label>
                                            <input type="text" name="nm_rw" value="{{$rw->nm_rw}}" class="form-control" >
                                            {!! $errors->first('nm_rw','<p class="help-block" style="color:red">:message</p>') !!}
                                     
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