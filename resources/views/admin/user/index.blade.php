@extends('master.master')
@push('rw')
active  
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               

                <div class="card-body">
                    @if (session('succes'))
                        <div class="alert alert-success" role="alert">
                            {{ session('succes') }}
                        </div>
                    @endif

                   
                        <div class="card-header">Rw
                                <a href="{{route('users.create')}}" class="float-right btn btn-primary"> Tambah </a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Email</th>
                                                        <th>role</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($users as $item)
                                                    <tr>
                                                        <th >{{$no++}}</th>
                                                        <th>{{$item->name}}</th>
                                                        <th>{{$item->email}}</th>
                                                        <th>{{$item->role}}</th>
                                                     
                                                        
                                                        <td>
                                                          
                                                            <form action="{{route('rw.destroy',$item->id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                 <a class="btn btn-outline-success"   href="{{route('rw.edit',$item->id)}}" ><i class="fas fa-edit">Edit</i></a>
                                                                 <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus<i class="fa fa-trash-alt"></i>
                                                            </form>
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
@endsection
@push('js')
    
<script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });

    });
  </script>
  @endpush