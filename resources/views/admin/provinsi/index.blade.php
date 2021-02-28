@extends('master.master')
@push('provinsi')
active  
@endpush
@push('provinsi')
active
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              

                <div class="card-body">

                    <div class="card">
                        <div class="card-header">Provinsi
                                <a href="{{route('provinsi.create')}}" class="float-right btn btn-primary"> Tambah </a>
                        </div>   
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table  id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Provinsi</th>
                                                        <th>Kode Provinsi</th>
                                                        <th>Acion</th>
                                                    </tr>
                                                    
                                                </thead>
                                                <tbody>
                                                    @php $no = 1; @endphp
                                                    @foreach ($provinsi as $item)
                                                    <tr>
                                                        <th >{{$no++}}</th>
                                                        <th>{{$item->nama_provinsi}}</th>
                                                        <th>{{$item->kode_provinsi}}</th>
                                                        <td>
                                                          <form action="{{route('provinsi.destroy',$item->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                             <a class="btn btn-outline-success"   href="{{route('provinsi.edit',$item->id)}}" ><i class="fas fa-edit">Edit</i></a>
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
