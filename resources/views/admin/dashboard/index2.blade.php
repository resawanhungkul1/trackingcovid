@extends('master.master')

@section('content')

    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
      {{-- <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p>Jumlah Positif</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid --> --}}
   
    <div class="container">
      <div class="row justify-content-center">
                  <div class="card-body">
                      @if (session('succes'))
                          <div class="alert alert-success" role="alert">
                              {{ session('succes') }}
                          </div>
                      @endif
  
                      <div class="card">
                          </div>   
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="card-body">
                                          <div class="table-responsive">
                                              <table id="example1" class="table table-bordered">
                                                  <thead>
                                                      <tr>
                                                          <th>No</th>
                                                          <th>Nama Kota</th>
                                                          <th>Nama Kecamatan</th>
                                                          <th>Action</th>
                                                      </tr>
                                                      
                                                  </thead>
                                                  <tbody>
                                                    <tr></tr>
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
    <!-- /.content -->
 
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