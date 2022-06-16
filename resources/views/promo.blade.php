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
            <h6 class="m-0 font-weight-bold text-primary">Promo</h6>
        </div>
        <div class="card-body">
          <form method="POST" action="/promo-store" enctype="multipart/form-data" id="form-pesan">
            {{--   --}}
            @csrf
            <div class="form-group">
              <label for="image">Image</label>
              <input type="file" name="image" class="form-control-file" id="image">
            </div>
            <div class="form-group">
              <label for="pesan">Pesan</label>
              <input class="form-control" name="pesan" id="pesan"style="height:300px" disabled>
            </div>
            <button type="submit" class="btn text-light" style="background-color: #01949B;">Submit</button>
          </form>
        </div>
    </div>


@endsection