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
  <div class="container promo-wrapper">
    <h1 class="mb-3">Promo</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/image/promo-fix.jpeg" class="d-block w-100" alt="...">
        </div>
        @foreach($promo as $row)
        <div class="carousel-item">
          <img src="{{asset('storage/' . $row->image)}}" class="d-block w-100" alt="...">
        </div>
        @endforeach
       
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>
</section>

<section>
  <div class="container about-wrapper" id="about">
    <div class="about-us-left">
      <h3>About US</h3>
      <p>Sunday Clean merupakan Jasa Cuci Sepatu yang telah berpengalaman selama bertahun tahun.
        Sangat mengutamakan kesenangan customer dan terus melakukan inovasi.
        </p>
      {{-- <div class="about-box"></div> --}}
    </div>
    <div class="about-us-right">
      <div class="about-link">
        <div class="about-box">
          <h5>3</h5>
          <p>Tahun Pengalaman</p>
        </div>
        <div class="about-box">
          <h5>2</h5>
          <p>Store Buka</p>
        </div>
      </div>
      <div class="about-link-large">
        <h5>100+</h5>
          <p>Customer yang telah berlangganan</p>
      </div>
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
  <div class="container from-customer-wrapper" id="from-our-customer">
    <h3>From Our Customer</h3>
    <div class="from-customer-box">
      {{-- <div class="box-link"></div>
      <div class="box-link"></div>
      <div class="box-link"></div> --}}

      <div class="container card-wrapper">
        <div class="row atas justify-content-center .card-from-customer">
          <div class="col-md-4 col-sm-8 col-lg-3 mb-5" >
            <div  class="card d-flex " >
              <div class="box-card">
                <img src="assets/image/from-customer1.svg" class="card-img-top" alt="..."  />
              </div>
              <div class="card-body">
                {{-- <h5 class="card-title">DEEP CLEAN</h5> --}}
                <p class="card-text">Sepatu jadi bersih, wangi
                  Bintang 5 sangat ramah.</p>
                <a href="#" class="btn">Eddota - Sidoarjo</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-8 col-lg-3 mb-5" >
            <div  class="card d-flex " >
              <div class="box-card">
                <img src="assets/image/from-customer2.png" class="card-img-top" alt="..."  />
              </div>
              <div class="card-body">
                {{-- <h5 class="card-title">DEEP CLEAN</h5> --}}
                <p class="card-text">Sepatu jadi bersih, wangi
                  Bintang 5 sangat ramah.</p>
                <a href="#" class="btn">Eddota - Sidoarjo</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-8 col-lg-3 mb-5" >
            <div  class="card d-flex " >
              <div class="box-card">
                <img src="assets/image/from-customer3.svg" class="card-img-top" alt="..."  />
              </div>
              <div class="card-body">
                {{-- <h5 class="card-title">DEEP CLEAN</h5> --}}
                <p class="card-text">Sepatu jadi bersih, wangi
                  Bintang 5 sangat ramah.</p>
                <a href="#" class="btn">Eddota - Sidoarjo</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
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