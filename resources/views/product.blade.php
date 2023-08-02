<!DOCTYPE html>
<html lang="en">
<head>
  <title>Red Facial and Body Treatment</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('landingpage/images/favicon.ico') }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('landingpage/vendors/owl-carousel/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landingpage/vendors/owl-carousel/css/owl.theme.default.css') }}">
  <link rel="stylesheet" href="{{ asset('landingpage/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('landingpage/vendors/aos/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('landingpage/css/style.min.css') }}">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container" style="flex-wrap:nowrap">
      <div class="navbar-brand-wrapper d-flex w-100">
        <img src="{{ asset('landingpage/images/Logo.png') }}" style="height:60px; width:85px" alt="">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="{{ asset('landingpage/images/Logo.png') }}" alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="\">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features-section">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#digital-marketing-section">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#feedback-section">Testimonials</a>
          </li>
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            <a href="https://api.whatsapp.com/send?phone=628115988858&fbclid=IwAR0qxlJod4tMMzq7tzN0xJkhrB6oAfWTPtVl0rH37dOzvUgEhr6Ohe0zSS0">
            <button class="btn btn-info"><span class="mdi mdi-whatsapp"></span>Contact Us</button>
            </a>
          </li>
          <!-- <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            <a class="btn btn-info" href="{{url('/login')}}">Contact Us</a>
          </li>  -->
        </ul>
      </div>
    </div>
    </nav>
  </header>
  <div class="banner">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 grid-margin-lg-0" data-aos="fade-right">
            <h3 class="m-0 text-danger">Red Facial and<br>Body Treatment</h3>
            <div class="col-lg-7 col-xl-6 p-0">
              <p class="py-4 m-0 text-muted ">Red facial and body treatment adalah jasa layanan perawatan wajah, tubuh, rambut dan kuku untuk pria dan wanita</p>
              <p class="font-weight-medium text-muted">berlokasi di Balikpapan, Kalimantan Timur</p>
            </div>
          </div>
          <div class="col-12 col-lg-5 p-0 img-digital grid-margin-lg-0" data-aos="fade-left">
            <div class="owl-carousel1 owl-theme">
                <div class="card customer-cards">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="data:image\png;base64,{{\App\Models\PostsWorker::find(1)->image}}" width="89" height="89" alt="" class="img-fluid">
                      <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                      <button class="btn btn-info">Readmore</button>
                    </div>
                  </div>
                </div>
                <div class="card customer-cards">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{ asset('landingpage/images/face3.jpg') }}" width="89" height="89" alt="" class="img-fluid">
                      <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                      <button class="btn btn-info">Readmore</button>
                    </div>
                  </div>
                </div>
                <div class="card customer-cards">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{ asset('landingpage/images/face20.jpg') }}" width="89" height="89" alt="" class="img-fluid">
                      <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                      <button class="btn btn-info">Readmore</button>
                    </div>
                  </div>
                </div>
                <div class="card customer-cards">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{ asset('landingpage/images/face15.jpg') }}" width="89" height="89" alt="" class="img-fluid">
                      <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                      <button class="btn btn-info">Readmore</button>
                    </div>
                  </div>
                </div>
                <div class="card customer-cards">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{ asset('landingpage/images/face16.jpg') }}" width="89" height="89" alt="" class="img-fluid">
                      <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                      <button class="btn btn-info">Readmore</button>
                    </div>
                  </div>
                </div>
                <div class="card customer-cards">
                  <div class="card-body">
                    <div class="text-center">
                      <img src="{{ asset('landingpage/images/face20.jpg') }}" width="89" height="89" alt="" class="img-fluid">
                      <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
                      <button class="btn btn-info">Readmore</button>
                    </div>
                  </div>
                </div>
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
                    <img src="{{ asset('landingpage/images/Group95.svg') }}" class="case-studies-card-img" alt="">
                  </div>
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Facial Treatment</h6>
                      <button class="btn btn-white">Read More</button>
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
                      <img src="{{ asset('landingpage/images/Group108.svg') }}" class="case-studies-card-img" alt="">
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
                      <img src="{{ asset('landingpage/images/Group126.svg') }}" class="case-studies-card-img" alt="">
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
                      <img src="{{ asset('landingpage/images/Group115.svg') }}" class="case-studies-card-img" alt="">
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
                    <img src="{{ asset('landingpage/images/Group95.svg') }}" class="case-studies-card-img" alt="">
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
                      <img src="{{ asset('landingpage/images/Group108.svg') }}" class="case-studies-card-img" alt="">
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
                      <img src="{{ asset('landingpage/images/Group126.svg') }}" class="case-studies-card-img" alt="">
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
      <section class="teams" id="teams-section">
        <div class="row" style="justify-content:center">
          <div class="col-12 text-center pb-5">
            <h2>Our Team</h2>
            <h6 class="section-subtitle text-muted"></h6>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-primary text-center card-contents">
                  <div class="card-image">
                    <img href="{{ asset(\App\Models\PostsWorker::find(1)->image) }}" class="case-studies-card-img" alt="">
                  </div>
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Package Treatment</h6>
                      <button class="btn btn-white" >Read More</button>
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
                      <img src="{{ asset('landingpage/images/Group108.svg') }}" class="case-studies-card-img" alt="">
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
      </section>
      <section class="customer-feedback" id="feedback-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <h2>Reviews</h2>
            <h6 class="section-subtitle text-muted m-0"></h6>
          </div>
          <div class="owl-carousel owl-theme grid-margin">
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face2.jpg') }}" width="89" height="89" alt="" class="img-fluid">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face3.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Sophia Armstrong</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face20.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face15.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face16.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face1.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face2.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face3.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Sophia Armstrong</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face20.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <section class="facilities" id="facilities-section">
        <div class="row">
          <div class="col-12 text-center pb-5">
            <h2>Facilities</h2>
            <h6 class="section-subtitle text-muted m-0"></h6>
          </div>
          <div class="owl-carousel owl-theme grid-margin">
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face2.jpg') }}" width="89" height="89" alt="" class="img-fluid">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face3.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Sophia Armstrong</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face20.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face15.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face16.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face1.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face2.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Tony Martinez</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face3.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Sophia Armstrong</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
              <div class="card customer-cards">
                <div class="card-body">
                  <div class="text-center">
                    <img src="{{ asset('landingpage/images/face20.jpg') }}" width="89" height="89" alt="" class="img-customer">
                    <p class="m-0 py-3 text-muted"></p>
                    <div class="content-divider m-auto"></div>
                    <h6 class="card-title pt-3">Cody Lambert</h6>
                    <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>
      <section class="contact-us" id="contact-section">
        <div class="grid-margin" >

        </div>
      </section>

      <section class="contact-details" id="contact-details-section">
        <div class="row text-center text-md-left">
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <img src="{{ asset('landingpage/images/Logo.png') }}" alt="" class="pb-2 image-responsive" width="auto" height="120px" >
            <div class="pt-2">
              <p class="text-muted m-0">WA Admin : 08115988858</p>
              <p class="text-muted m-0">Telp Kantor : 05428504271</p>
              {{-- <p class="text-muted m-0">Email : redfacialbodyandtreatment@gmail.com</p>
              <p class="text-muted m-0">Alamat : Strat 2 Gn.Smd RT.17 No.90 Gg.Mulyo</p>
              <p class="text-muted m-0">Balikpapan</p> --}}
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="auto" height="100%" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.88882135063!2d116.8462795!3d-1.2367842999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df147cc54204ba5%3A0x868484965802b9ef!2sRed%20Facial%20and%20Body%20Treatment!5e0!3m2!1sen!2sid!4v1673670243956!5m2!1sen!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:center;height:100%;width:auto;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:auto;}</style></div></div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Shortlink</h5>
            <a href="#"><p class="m-0 pb-2">Facial Treatment</p></a>
            <a href="#" ><p class="m-0 pt-1 pb-2">Body Treatment</p></a>
            <a href="#"><p class="m-0 pt-1 pb-2">Hair Treatment</p></a>
            <a href="#"><p class="m-0 pt-1 pb-2">Eyelash & Nail Treatment</p></a>
            <a href="#"><p class="m-0 pt-1 pb-2">Package</p></a>
            <a href="#"><p class="m-0 pt-1">Produk</p></a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
              <h5 class="pb-2">Our address</h5>
              <p class="text-muted">Jl. Strat 2 Gang Mulyo RT. 17 No. 90<br>Gunung Samarinda<br>Balikpapan Utara</p>
              <div class="d-flex justify-content-center justify-content-md-start">
                <a href="https://api.whatsapp.com/send?phone=628115988858&fbclid=IwAR0qxlJod4tMMzq7tzN0xJkhrB6oAfWTPtVl0rH37dOzvUgEhr6Ohe0zSS0"><span class="mdi mdi-whatsapp"></span></a>
                <a href="https://www.instagram.com/red_facialandbodytreatment"><span class="mdi mdi-instagram"></span></a>
                <a href="https://www.facebook.com/redfacialandbodytreatment/"><span class="mdi mdi-facebook"></span></a>
                {{-- <a href="https://www.tiktok.com/@redfacialnbodytreatment" target="_blank" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>TikTok</title>
                        <path
                        d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"
                        />
                    </svg> --}}
                </a>
              </div>
          </div>
        </div>
      </section>
      <footer class="border-top">
        <p class="text-center text-muted pt-4">Copyright © 2023<a href="#" class="px-1">Red Facial and Body Treatment.</a>All rights reserved.</p>
      </footer>
      <!-- Modal for Contact - us Button -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control" id="Email-1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('landingpage/vendors/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('landingpage/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('landingpage/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('landingpage/vendors/aos/js/aos.js') }}"></script>
  <script src="{{ asset('landingpage/js/landingpage.js') }}"></script>
</body>
</html>
