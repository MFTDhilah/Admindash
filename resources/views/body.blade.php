@extends('layouts.appland')
@section('content')

@include('layouts.partials.navland')

  <div class="banner">
    <div class="container">
        <div class="align-items-center" style="text-align: center;">
          <div class="grid-margin-lg-0" data-aos="fade-right">
            <h3 class="m-0 text-danger">Red Facial and Body Treatment</h3><br>    
          </div>
        </div>
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <section class="pricing-section">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
              <div class="section-title text-center title-ex1">
                <h2>Body Treatment</h2>
                <br>
              </div>
            </div>
          </div>
          <!-- Pricing Table starts -->
          <div class="row" style="justify-content: center;">
            @if(isset($body))
            @foreach($body as $data)
            @if($data->status==1)
            <div class="col-md-4 pt-4">
              <div class="price-card featured" style="max-height: 465px;">
                <h2>{{$data->nama_layanan}}</h2>
                <p>{{$data->content}}</p>
                <p class="price"><span>{{$data->harga}}</span>/{{$data->waktu}}</p>
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
