@extends('layouts.login-layout')

@section('content')

<div class="container">
  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row" style="height: 600px">
            <div class="col-lg-6 d-none d-lg-block bg">
              <div class="bg-login-image">
                <img src="assets/image/logo-sunday-clean.svg" alt="" />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-left">
                  <h1 class="h4 text-gray-900 mb-5">Log in.</h1>
                </div>
                <form class="user mb-5" method="POST" action="/admin-login">
                  @csrf
                  <div class="form-group mb-5">
                    <input type="text" class="form-control form-control-user" name="username" placeholder="Username" />
                  </div>
                  <div class="form-group mb-5">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password" />
                  </div>
                  <button type="submit" class="btn btn-user btn-block"> Login </button>
                  <hr />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection