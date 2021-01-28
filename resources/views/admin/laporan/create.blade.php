@extends('master.master')
@push('laporan')
active  
@endpush
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                        <div class="card-header">
                                Tambah Data Kota
                            </div>
                            <div class="card-body">
                                <form action="{{route('laporan-store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @livewire('select')
                                </form>
                            </div>
                </div>
            </div>
        </div>
    </div>
@endsection