@extends('layouts.landingPage-layout')

@section('content')


<section>
  <div class="container hero-wrapper">
    <div class="hero-desc">
      <h1>Make your Shoes Perfect.</h1>
      <p>Buat sepatumu lebih bersih dan wangi, dengan penanganan terbaik dari kami.</p>
    </div>
    <div class="hero-image">
      <div class="image">
        <img src="assets/image/logo-sunday-clean.svg" alt="logo-sunday-clean" />
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container service-wrapper">
    <div class="service-link">
      <img src="assets/image/star.svg" alt="" />
      <p>100% Bersih & Wangi</p>
    </div>
    <div class="service-link">
      <img src="assets/image/location.svg" alt="" srcset="" />
      <p>Diantar Sampai Rumah</p>
    </div>
    <div class="service-link">
      <img src="assets/image/percent.svg" alt="" srcset="" />
      <p>Dapatkan Promo Setiap Bulannya!</p>
    </div>
    <div class="service-link">
      <img src="assets/image/service.svg" alt="" srcset="" />
      <p>Customer Support</p>
    </div>
  </div>
</section>

<section>
  <div class="container handle-wrapper">
    <div class="handle-left">
      <div class="desc">
        <h3>Handle With Care</h3>
        <p>Sepatu anda di bersihkan dengan penanganan terbaik oleh para ahlinya</p>
      </div>
      <div class="image">
        <img src="assets/image/bg-handle-1.png" alt="" srcset="" />
      </div>
    </div>
    <div class="handle-right">
      <img src="assets/image/bg-handle-2.png" alt="" srcset="" />
    </div>
  </div>
</section>

<section>
  <div class="container about-wrapper">
    <div class="about-us-left">
      <h3>About US</h3>
      <div class="about-box"></div>
    </div>
    <div class="about-us-right">
      <div class="about-link">
        <div class="about-box"></div>
        <div class="about-box"></div>
      </div>
      <div class="about-link-large"></div>
    </div>
  </div>
  <div class="container display">
    <div class="display-box">
      <img src="assets/image/display-1.svg" alt="" srcset="" />
    </div>
    <div class="display-box">
      <img src="assets/image/display-2.svg" alt="" srcset="" />
    </div>
    <div class="display-box">
      <img src="assets/image/display-3.svg" alt="" srcset="" />
    </div>
  </div>
</section>

<section>
  <div class="container from-customer-wrapper">
    <h3>From Our Customer</h3>
    <div class="from-customer-box">
      <div class="box-link"></div>
      <div class="box-link"></div>
      <div class="box-link"></div>
    </div>
  </div>
</section>

<section>
  <div class="container subscribe-wrapper">
    <div class="subscribe-left">
      <h1>Subscribe for the daily updates</h1>
      <p>Subscribe for the daily updates</p>
    </div>
    <div class="subscribe-right">
      <form action="/store-customer" method="POST">
      @csrf
        <div class="form-group">
          <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="enter your name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="telp" id="exampleInputPassword1" placeholder="enter your phone"> 
        </div>
        <button type="submit" class="btn btn-warning text-light">subscribe</button>
      </form>
      </div>
  </div>
</section>

<section>
  <div class="container social-media-wrapper">
    <h3>Sunday Clean</h3>
    <div class="social-media">
      <img src="assets/image/icon-wa.svg" alt="" srcset="" />
      <img src="assets/image/icon-ig.svg" alt="" srcset="" />
      <img src="assets/image/icon-email.svg" alt="" srcset="" />
    </div>
  </div>
</section>

<footer>
  <img src="assets/image/icon-footer.svg" alt="" srcset="" />
  <p>Copyright Sunday Clean. All right reserved</p>
</footer>

@endsection