@extends('layouts.appland')
@section('content')

@include('layouts.partials.navland')

<div class="banner">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 grid-margin-lg-0" data-aos="fade-right">
            <h3 class="m-0 text-danger">Red Facial and<br>Body Treatment</h3>
            <div class="col-lg-7 col-xl-6 p-0">
              <p class="py-4 m-0 text-muted ">Red facial and body treatment adalah sebuah tempat yang menyediakan jasa layanan untuk perawatan wajah, tubuh, rambut dan kuku untuk pria dan wanita</p>
              <p class="font-weight-medium text-muted">berlokasi di Jl. Strat 2, Gang Mulyo, Gunung Samarinda, Balikpapan, Kalimantan Timur</p>
            </div>
          </div>
          <div class="col-12 col-lg-5 p-0 img-digital grid-margin-lg-0" data-aos="fade-left">
            <div class="owl-carousel1 owl-theme">
              @if(isset($posts))
              @foreach($posts as $data)
              @if($data->status==1)
                <div class="card customer-cards">
                  <div class="card-body">
                    <div class="text-center">
                      
                      <img src="data:image/png;base64,{{$data->image}}" width="100%" height="100%" alt="" class="img-fluid" style="height: 250px;">
                      <p class="m-0 py-3 text-muted">{{$data->content}}</p>
                    </div>
                  </div>
                </div>
              @endif
              @endforeach
              @endif
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <section class="services" id="services-section">
        <div class="row grid-margin" style="justify-content:center">
          <div class="col-12 text-center pb-5">
            <h2>Our Services</h2>
            <h6 class="section-subtitle text-muted"></h6>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-primary text-center card-contents">
                  <div class="card-image">
                    <img src="{{ asset('landingpage/images/Group95.svg') }}" class="services-card-img" alt="">
                  </div>
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Facial Treatment</h6>
                      <a href="/facial">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Facial Treatment</h6>
                    <p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-warning text-center card-contents">
                  <div class="card-image">
                      <img src="{{ asset('landingpage/images/Group108.svg') }}" class="services-card-img" alt="">
                  </div>
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Body Treatment</h6>
                      <a href="/body">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Body Treatment</h6>
                    <p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-violet text-center card-contents">
                  <div class="card-image">
                      <img src="{{ asset('landingpage/images/Group126.svg') }}" class="services-card-img" alt="">
                  </div>
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Hair Treatment</h6>
                      <a href="/hair">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Hair Treatment</h6>
                    <p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card" data-aos="zoom-in" data-aos-delay="600">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-success text-center card-contents">
                  <div class="card-image">
                      <img src="{{ asset('landingpage/images/Group115.svg') }}" class="services-card-img" alt="">
                  </div>
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Nail & Lash Treatment</h6>
                      <a href="/nail">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Nail & Lash Treatment</h6>
                    <p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-primary text-center card-contents">
                  <div class="card-image">
                    <img src="{{ asset('landingpage/images/Group95.svg') }}" class="services-card-img" alt="">
                  </div>
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Package Treatment</h6>
                      <a href="/package">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Package Treatment</h6>
                    <p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-warning text-center card-contents">
                  <div class="card-image">
                      <img src="{{ asset('landingpage/images/Group108.svg') }}" class="services-card-img" alt="">
                  </div>
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Home Service Treatment</h6>
                      <button class="btn btn-white">Read More</button>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Home Service Treatment</h6>
                    <p></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-violet text-center card-contents">
                  <div class="card-image">
                      <img src="{{ asset('landingpage/images/Group126.svg') }}" class="services-card-img" alt="">
                  </div>
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Product</h6>
                      <button class="btn btn-white">Read More</button>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Product</h6>
                    <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="customer-feedback" id="feedback-section">
        <div class="row" style="justify-content: space-evenly">
            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
            <div class="elfsight-app-dad6fff1-6abe-4e7d-8e9d-17aac4fcb070"></div>
        </div>
      </section>
      <section class="customer-feedback" id="facilities-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <h2>Facilities</h2>
            <h6 class="section-subtitle text-muted m-0"></h6>
          </div>
          
          <div class="owl-carousel owl-theme grid-margin">
              @if(isset($facility))
              @foreach($facility as $data)
              @if($data->status==1)
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                  @if($data->image)
                    <img src="data:image/png;base64,{{$data->image}}" width="89" height="89" alt="" class="img-fluid" style="max-width: 200px;">
                    @endif
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">{{$data->name}}</h6>
                    <h6 class="customer-designation text-muted m-0">{{$data->content}}</h6>
                  </div>
                </div> 
              </div>
              @endif
              @endforeach
              @endif
          </div>
        </div>
      </section>
      <section class="contact-us" id="contact-section">
        <div class="grid-margin" >

        </div>
      </section><!-- /.control-sidebar -->
@endsection('content')
