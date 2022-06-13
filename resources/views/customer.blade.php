@extends('layouts.main-layout')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Customer</h1>
  <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<!-- Content Row -->
<div class="row">
  
      <!-- Basic Card Example -->
      <div class="card shadow mb-4" style="width:100%;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Send Message</h6>
        </div>
        <div class="card-body">
          <form method="POST" action="" enctype="multipart/form-data" id="form-pesan">
            {{--   --}}
            @csrf
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image" class="form-control-file" id="image">
            </div>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <textarea class="form-control" name="pesan" id="pesan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn text-light" style="background-color: #01949B;">Submit</button>
          </form>
        </div>
    </div>

  <!-- Datatables -->
  <div class="card shadow mb-4" style=" width: 100%;">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
        <a class=" btn text-light" style="background-color: #01949B;" data-toggle="modal" data-target="#tambah">Add New</a>
    </div>
    <div class="card-body" >
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-left">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Telp</th>
                        <th >Alamat</th>
                        <th class="d-flex text-center">
                            Checklist
                            <div class="form-check" style="margin-left: 7%;">
                            <input class="form-check-input" type="checkbox" value="" id="checklistAll">
                            </div>
                       
                        </th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($customer as $row)
                    
                  <tr>
                    <td>{{$loop->iteration}}</td>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->telp}}</td>
                        <td>{{$row->alamat}}</td>
                        <td class="text-center ">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checklist" data-telp="{{$row->telp}}">
                          </div>
                        </td>
                        <td class="text-center">
                          <a id="edit"  class="btn btn-warning w-25 " data-toggle="modal" data-target="#exampleModal" data-nama="{{$row->nama}}" data-telp="{{$row->telp}}" data-alamat="{{$row->alamat}}" data-id="{{$row->id_customer}}"
                            ><i class='bx bx-edit-alt'></i>
                          </a>
                          <a href="/hapus-customer/{{$row->id_customer}}" class="btn btn-danger w-25"  ><i class='bx bx-trash-alt' ></i></a>
                        </td>
                        
                      </tr>
                      
                      @endforeach    
                </tbody>
            </table>
        </div>

        {{-- modal tambah --}}
        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="/tambah-customer" method="post">
                @csrf
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Customer Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <div class="form-group">
                    <label for="nama">Nama Customer</label>
                    <input type="text" class="form-control-file" name="nama" id="nama">
                  </div>
                <div class="form-group">
                  <label for="notelp">NoTelp Customer</label>
                  <input type="text" class="form-control-file" name="notelp" id="notelp" placeholder="+62">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat Customer</label>
                  <input type="text" class="form-control-file" name="alamat" id="alamat">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn text-light" style="background-color: #01949B;">Save changes</button>
              </div>
            </form>
            </div>
          </div>
        </div>

        
        {{-- modal edit --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="/edit-customer" method="post">
                @csrf
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Customer Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <input type="hidden" name="id" id="id-edit" >
                  <div class="form-group">
                    <label for="nama-edit">Nama Customer</label>
                    <input type="text" class="form-control-file" name="nama" id="nama-edit">
                  </div>
                <div class="form-group">
                  <label for="notelp-edit">NoTelp Customer</label>
                  <input type="text" class="form-control-file" name="notelp" id="notelp-edit">
                </div>
                <div class="form-group">
                  <label for="alamat-edit">Alamat Customer</label>
                  <input type="text" class="form-control-file" name="alamat" id="alamat-edit">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn text-light" style="background-color: #01949B;">Save changes</button>
              </div>
            </form>
            </div>
          </div>
        </div>

    </div>
</div>

@endsection