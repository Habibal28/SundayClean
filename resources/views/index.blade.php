@extends('layouts.main-layout')

@section('content')

           <!-- Page Heading -->
           <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Custmoer</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalCustomer}} </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            {{-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Orders</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">99</div>
                    </div>
                    <div class="col-auto">
                       <img src="../assets/image/customer.svg" alt="" srcset="" >
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}

            <div class="card shadow mb-4" style=" width: 100%;">
              <div class="card-header py-3 d-flex justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
                  <a href="/admin-customer" class=" btn text-light" style="background-color: #01949B;">See All</a>
              </div>
              <div class="card-body" >
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                  <th>Nama</th>
                                  <th>No Telp</th>
                                  <th>Alamat</th>
                                 
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($customer as $row)
                              
                            <tr>
                              <td>{{$row->nama}}</td>
                              <td>{{$row->telp}}</td>
                              <td>{{$row->alamat}}</td>
                             
                            </tr>

                            @endforeach
                              
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- <footer class="sticky-footer bg-white  ">
        <div class="container my-auto">
          <div class="copyright text-center my-auto ">
            <span>Copyright &copy; Your Website 2021</span>
          </div>
        </div>
      </footer> -->
      <!-- End of Footer -->

@endsection