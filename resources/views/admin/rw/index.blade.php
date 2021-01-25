@extends('master.master')
@push('rw')
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
                        <div class="card-header">Rw
                                <a href="{{route('rw-create')}}" class="float-right btn btn-primary"> Tambah </a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Kelurahan</th>
                                                        <th>Nama rw</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($rw as $item)
                                                    <tr>
                                                        <th >{{$no++}}</th>
                                                        <th>{{$item->kelurahan->nm_kelurahan}}</th>
                                                        <th>{{$item->nm_rw}}</th>
                                                        
                                                        <td>
                                                          
                                                             <a class="btn btn-outline-success" href="{{route('rw-edit',$item->id)}}">Edit</a>
                                                            <a class="btn btn-outline-danger" href="{{route('rw-delete',$item->id)}}">Delete</a>
                                                   
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
