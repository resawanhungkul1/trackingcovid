@extends('master.master')
@push('kota')
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
                        <div class="card-header">Kota
                                <a href="{{route('kota-create')}}" class="float-right btn btn-primary"> Tambah </a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Provinsi</th>
                                                        <th>Kode Kota</th>
                                                        <th>Nama Kota</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($kota as $item)
                                                    <tr>
                                                        <th >{{$no++}}</th>
                                                        <th>{{$item->provinsi->nm_provinsi}}</th>
                                                        <th>{{$item->kode_kota}}</th>
                                                        <th>{{$item->nm_kota}}</th>
                                                        <td>
                                                          
                                                             <a class="btn btn-outline-success" href="{{route('kota-edit',$item->id)}}">Edit</a>
                                                            <a class="btn btn-outline-danger" href="{{route('kota-delete',$item->id)}}">Delete</a>
                                                   
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
