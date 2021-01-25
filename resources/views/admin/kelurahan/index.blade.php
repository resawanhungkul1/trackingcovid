@extends('master.master')
@push('kelurahan')
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
                                <a href="{{route('kelurahan-create')}}" class="float-right btn btn-primary"> Tambah </a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Kecamatan</th>
                                                        <th>Nama kelurahan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($kelurahan as $item)
                                                    <tr>
                                                        <th >{{$no++}}</th>
                                                        <th>{{$item->Kecamatan->nm_kecamatan}}</th>
                                                        <th>{{$item->nm_kelurahan}}</th>
                                                        
                                                        <td>
                                                          
                                                             <a class="btn btn-outline-success" href="{{route('kelurahan-edit',$item->id)}}">Edit</a>
                                                            <a class="btn btn-outline-danger" href="{{route('kelurahan-delete',$item->id)}}">Delete</a>
                                                   
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
