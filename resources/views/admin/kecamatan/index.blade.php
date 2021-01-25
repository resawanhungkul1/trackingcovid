@extends('master.master')
@push('kecamatan')
active
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('succes'))
                        <div class="alert alert-success" role="alert">
                            {{ session('succes') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">Kecamatan
                                <a href="{{route('kecamatan-create')}}" class="float-right btn btn-primary"> Tambah </a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Kota</th>
                                                        <th>Nama Kecamatan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($kecamatan as $item)
                                                    <tr>
                                                        <th >{{$no++}}</th>
                                                        <th>{{$item->kota->nm_kota}}</th>
                                                        <th>{{$item->nm_kecamatan}}</th>
                                                        
                                                        <td>
                                                          
                                                             <a class="btn btn-outline-success" href="{{route('kecamatan-edit',$item->id)}}">Edit</a>
                                                            <a class="btn btn-outline-danger" href="{{route('kecamatan-delete',$item->id)}}">Delete</a>
                                                   
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
