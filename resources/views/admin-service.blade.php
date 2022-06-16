@extends('layouts.mainlayout2')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Customer</h1>
  <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
</div>

<!-- Content Row -->
<div class="row">
  
      <!-- Basic Card Example -->
      {{-- <div class="card shadow mb-4" style="width:100%;"> --}}
        {{-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Send Message</h6>
        </div> --}}
        {{-- <div class="card-body">
          <form method="POST" action="" enctype="multipart/form-data" id="form-pesan">
            
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
          </form> --}}
        {{-- </div> --}}
    {{-- </div> --}}

  <!-- Datatables -->
  <div class="card shadow mb-4" style=" width: 100%;">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Data Service</h6>
        <a class=" btn text-light" style="background-color: #01949B;" data-toggle="modal" data-target="#tambah">Add New</a>
    </div>
    <div class="card-body" >
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-left">
                        <th>No</th>
                        <th>Nama</th>
                        <th>isi</th>
                        <th>Harga</th>
                        <th >Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($service as $row)
                    
                  <tr>
                    <td>{{$loop->iteration}}</td>
                        <td>{{$row->nama}}</td>
                        <td>{{$row->isi}}</td>
                        <td>{{$row->harga}}</td>
                        <td class="text-center">
                            <img src="{{ asset('storage/' . $row->image) }}" alt="" width="150px"  >
                        </td>
                        <td class="text-center">
                          <a id="edit-service"  class="btn btn-warning  " data-toggle="modal" data-target="#exampleModal" data-id="{{$row->id_service}}" data-nama="{{$row->nama}}" data-isi="{{$row->isi}}" data-harga="{{$row->harga}}"  data-image="{{asset('storage/' . $row->image)}}"
                            ><i class='bx bx-edit-alt'></i>
                          </a>
                          <a href="/hapus-service/{{$row->id_service}}" class="btn btn-danger "  ><i class='bx bx-trash-alt' ></i></a>
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
              <form action="/tambah-service" method="post" enctype="multipart/form-data">
                @csrf
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Customer Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                  <div class="form-group">
                    <label for="nama">Nama/Judul</label>
                    <input type="text" class="form-control-file" name="nama" id="nama">
                  </div>
                <div class="form-group">
                  <label for="isi">Isi</label>
                  <input type="text" class="form-control-file" name="isi" id="isi" >
                </div>
                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="text" class="form-control-file" name="harga" id="harga">
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control-file" name="image" id="image">
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
              <form action="/edit-service" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Customer Edit</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                    <input type="hidden" name="id" id="id-edit-service" >
                    <div class="form-group">
                      <label for="nama">Nama/Judul</label>
                      <input type="text" class="form-control-file" name="nama" id="nama-edit-service">
                    </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control-file" name="isi" id="isi-edit-service" >
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control-file" name="harga" id="harga-edit-service">
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image-edit-service">
                  </div>
                  <div class="form-group">
                    <img src="" alt="" class="form-control-file" srcset="" name="imageshow" id="image-show">
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn text-light" style="background-color: #01949B;">Save changes</button>
                  </div>
              </div>
            </form>
            </div>
          </div>
        </div>

    </div>
</div>

@endsection