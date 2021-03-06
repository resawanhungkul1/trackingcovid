
@extends('master.master')
@push('provinsi')
active  
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Rw') }}</div>

                <div class="card-body">
                    <form action="{{route('provinsi.store')}}" method="post" enctype="multipart/form-data" id="provinsi_form">
                        @csrf
                        <div class="from-group">
                            <label for="">Nama Provinsi</label>
                            <input type="text" name="nama_provinsi" class="form-control @error('nama_provinsi') is-invalid @enderror"  value="{{old('nama_provinsi')}}">
                            @error('nama_provinsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                         
                        </div>
                        <div class="from-group">
                            <label for="">Kode Provinsi</label>
                            <input type="text" name="kode_provinsi" class="form-control @error('kode_provinsi') is-invalid @enderror"  value="{{old('kode_provinsi')}}">
                            @error('kode_provinsi')
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
{{-- @push('js')
 <script type="text/javascript">
    $(function(){
        $("provinsi_form").on("submit", function(e){
            e.preventDefault();
            $.ajax({
                url:$(this).attr('action'),
                method:$(this).attr('method'),
                data:new FormData(this),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:fonction(){
                    $(document).find('span.error-text').text('');
                },
                success:function(data){
                    if (data.status == 1) {
                        $.each(data.error, function(prefix, val){
                            $('span.'+prefix+'_error').text(val[0]);
                        });
                    }else{
                        $('#provinsi_form')[1].reset();
                        alert(data.msg);
                    }

                }
            });
        });
    });
 </script>
    
@endpush --}}
