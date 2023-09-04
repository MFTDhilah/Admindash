@extends('layouts.appland')
@section('content')

@include('layouts.partials.navland')

  <div class="banner">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-12 grid-margin-lg-0" data-aos="fade-right">
            <h3 class="m-0 text-danger">Red Facial and<br>Body Treatment</h3>
            <div class="p-0" style="text-align: justify">
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
                <div class="bg-primary text-center card-contents rounded">
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
        <div class="row grid-margin" style="align-items:center">
          <div class="col-12 text-center">
            <br>
            <h2>Sertification</h2>
            <h6 class="section-subtitle text-muted"></h6>
          </div>
          @if(isset($certification))
          @foreach($certification as $data)
          @if($data->status==1)
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-white text-center card-contents">
                  <div class="card-image">
                  @if($data->image)
                  <img src="data:image/png;base64,{{$data->image}}" width="300px" height="400px" alt="Cannot Found" class="img-fluid border border-danger rounded">
                  @endif
                  </div>
                  <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1"></h6>{{$data->name}}
                    <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
        @endforeach
        @endif
      </section>
  
      <section class="customer-feedback" id="feedback-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <h2>Business License</h2>
            <h6 class="section-subtitle text-muted m-0"></h6>
          </div>
          
          <div class="owl-carousel owl-theme grid-margin">
              @if(isset($license))
              @foreach($license as $data)
              @if($data->status==1)
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                  @if($data->image)
                    <img src="data:image/png;base64,{{$data->image}}" width="89" height="89" alt="" class="img-fluid" style="max-width: 200px;">
                    @endif
                  </div>
                  <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1"></h6>{{$data->name}}
                    <p></p>
                  </div>
                </div> 
              </div>
              @endif
              @endforeach
              @endif
          </div>
        </div>
      </section>

        <section class="customer-feedback" id="feedback-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <br>
            <br>
          </div>
        </div>
      </section>
      @endsection('content')
