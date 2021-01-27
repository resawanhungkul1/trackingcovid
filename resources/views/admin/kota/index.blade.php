@extends('master.master')
@push('kota')
active
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

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
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Provinsi</th>
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
                                                        <th>{{$item->nm_kota}}</th>
                                                        <td>
                                                          
                                                             <a class="btn btn-outline-success" href="{{route('kota-edit',$item->id)}}"><i class="fas fa-eye">Edit</i></a>
                                                            <a class="btn btn-outline-danger" href="{{route('kota-delete',$item->id)}}"><i class="fas fa-trash">Hapus</i></a>
                                                   
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