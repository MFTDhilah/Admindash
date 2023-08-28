  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('assets/dist/img/logo.png')}}" alt="logo" height="50" width="60">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-default waves-effect">
            <i class="fa-solid fa-right-from-bracket"></i>Sign Out</button>
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{url('/dashboard')}}" class="brand-link pt-3">
        <img src="{{asset('assets/dist/img/logo.png')}}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{env('APP_NAME')}}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar fixed">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-play" aria-hidden="true"></i>
              <p>
                Media
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('posts.all')}}" class="nav-link">
                        <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                        <p>
                            Welcoming
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('licences.all')}}" class="nav-link">
                        <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                        <p>
                            License
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('postsworker.all')}}" class="nav-link">
                        <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                        <p>
                            Worker
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('certifications.all')}}" class="nav-link">
                        <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                        <p>
                            Certifications
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('facility.all')}}" class="nav-link">
                        <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                        <p>
                            Facilities
                        </p>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('#')}}" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>
                Layanan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('servicesfacial.all')}}" class="nav-link">
                        <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                        <p>
                            Facial
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('servicesbody.all')}}" class="nav-link">
                        <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                        <p>
                            Body
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('serviceshair.all')}}" class="nav-link">
                        <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                        <p>
                            Hair
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('servicesnail.all')}}" class="nav-link">
                        <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                        <p>
                            Nail
                        </p>
                    </a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('#')}}" class="nav-link">
              <i class="nav-icon fas fa-box" aria-hidden="true"></i>
              <p>
                Paket
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('#')}}" class="nav-link">
                        <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                        <p>
                            Paket Regular
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('packagebody.all')}}" class="nav-link">
                                <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                                <p>
                                    Body Package
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('package100.all')}}" class="nav-link">
                                <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                                <p>
                                    Paket 100
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('package150.all')}}" class="nav-link">
                                <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                                <p>
                                    Paket 150
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('package200.all')}}" class="nav-link">
                                <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                                <p>
                                    Paket 200
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{url('#')}}" class="nav-link">
                        <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                        <p>
                            Paket Prewedding
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('preweddingbronze.all')}}" class="nav-link">
                                <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                                <p>
                                    Bronze
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('preweddingsilver.all')}}" class="nav-link">
                                <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                                <p>
                                    Silver
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('preweddinggold.all')}}" class="nav-link">
                                <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                                <p>
                                    Gold
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
