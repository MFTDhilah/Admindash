
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container" style="flex-wrap:nowrap">
      <div class="navbar-brand-wrapper d-flex w-100">
        <img src="{{ asset('landingpage/images/Logo.png')}}" style="height:60px; width:85px" alt="">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="{{ asset('landingpage/images/Logo.png') }}" style="height:60px; width:85px" alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="\#header-section">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="\about">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="\#services-section" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="\facial">Facial Treatment</a>
              <a class="dropdown-item" href="\body">Body Treatment</a>
              <a class="dropdown-item" href="\hair">Hair Treatment</a>
              <a class="dropdown-item" href="\nail">Eyelash & Nail Treatment</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Package
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="\bodypackage">Body Package</a>
              <a class="dropdown-item" href="\p100">Package 100</a>
              <a class="dropdown-item" href="\p150">Package 150</a>
              <a class="dropdown-item" href="\p200">Package 200</a>
              <a class="dropdown-item" href="\prewedbronze">Package Prewedding Bronze</a>
              <a class="dropdown-item" href="\prewedsilver">Package Prewedding Silver</a>
              <a class="dropdown-item" href="\prewedgold">Package Prewedding Gold</a>
              </div>
              <a class="dropdown-item" href="#">Product</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="\#feedback-section">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="\#facilities-section">Facilities</a>
          </li>
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
            <a href="https://api.whatsapp.com/send?phone=628115988858&fbclid=IwAR0qxlJod4tMMzq7tzN0xJkhrB6oAfWTPtVl0rH37dOzvUgEhr6Ohe0zSS0">
            <button class="btn btn-info"><span class="mdi mdi-whatsapp"></span>Contact Us</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
