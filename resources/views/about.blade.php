@extends('layouts.appland')
@section('content')

@include('layouts.partials.navland')

  <div class="banner">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 grid-margin-lg-0" data-aos="fade-right">
            <h3 class="m-0 text-danger">Red Facial and<br>Body Treatment</h3>
            <div class="col-lg-7 col-xl-6 p-0">
              <p class="py-4 m-0 text-muted ">Red Facial and Body Treatment adalah perusahan layanan jasa perawatan dan kecantikan yang berada di Kota Balikpapan. Layanan pada Red Facial and Body Treatment berlaku untuk pria dan wanita. Beberapa layanan treatment yang ditawarkan adalah perawatan wajah, tubuh, rambut dan kuku serta beberapa produk perawatan yang dijual langsung di store Red Facial and Body Treatment</p>
              <p class="font-weight-medium text-muted">berlokasi di Jl. Strat 2, Gang Mulyo, Gunung Samarinda, Balikpapan, Kalimantan Timur</p>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <section class="teams" id="teams-section">
      <div class="row" style="justify-content:center">
          <div class="col-12 text-center pb-5">
            <h2>Our Team</h2>
            <h6 class="section-subtitle text-muted"></h6>
          </div>
          @if(isset($postsworker))
          @foreach($postsworker as $data)
          @if($data->status==1)
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-primary text-center card-contents">
                  <div class="card-image">
                  @if($data->image)
                  <img src="data:image/png;base64,{{$data->image}}" width="200" height="300" alt="Cannot Found" class="img-fluid">
                  @endif
                </div>
                </div>
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1"></h6>{{$data->name}}
                    <p></p>
                </div>
              </div>
            </div>
          </div>
          @endif
          @endforeach
          @endif
      </section>
      <section class="services" id="services-section">
        <div class="row grid-margin" style="justify-content:center">
          <div class="col-12 text-center pb-5">
            <h2>Sertification</h2>
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
                      <button class="btn btn-white">Read More</button>
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
                      <button class="btn btn-white">Read More</button>
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
                      <button class="btn btn-white">Read More</button>
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
                      <button class="btn btn-white">Read More</button>
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
        <div class="row">
          <div class="col-12 text-center pb-5">
            <h2>Business Licence</h2>
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
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
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
        <section class="customer-feedback" id="feedback-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <br>
            <br>
          </div>
        </div>
      </section>
      @endsection('content')
