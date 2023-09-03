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
        </div>
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <section class="services" id="services-section">
        <div class="row grid-margin" style="justify-content:center">
          <div class="col-12 text-center pb-5">
            <h2>Our Packages</h2>
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
                      <h6 class="text-white pb-2 px-3">Know more about Body Package</h6>
                      <a href="/bodypackage">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Body Package</h6>
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
                      <h6 class="text-white pb-2 px-3">Know more about Package 100</h6>
                      <a href="/p100">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Package 100</h6>
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
                      <h6 class="text-white pb-2 px-3">Know more about Package 150</h6>
                      <a href="/p150">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Package 150</h6>
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
                      <h6 class="text-white pb-2 px-3">Know more about Package 200</h6>
                      <a href="/p200">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Package 200</h6>
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
                      <h6 class="text-white pb-2 px-3">Know more about Package Prewedding Bronze</h6>
                      <a href="/bronze">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Package Prewedding Bronze</h6>
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
                      <h6 class="text-white pb-2 px-3">Know more about Package Prewedding Silver</h6>
                      <a href="\silver">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Package Prewedding Silver</h6>
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
                      <h6 class="text-white pb-2 px-3">Know more about Package Prewedding Gold</h6>
                      <a href="\gold">
                      <button class="btn btn-white">Read More</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Package Prewedding Gold</h6>
                    <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="contact-us" id="contact-section">
        <div class="grid-margin" >

        </div>
      </section><!-- /.control-sidebar -->
@endsection('content')
