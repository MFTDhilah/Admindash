  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{asset('assets/dist/img/logo.png')}}" alt="logo" height="60" width="60">
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
      <div class="sidebar">
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
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                  <a href="{{route('posts.all')}}" class="nav-link">
                    <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                    <p>
                      Edit Gambar Welcoming 
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('services.all')}}" class="nav-link">
                    <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                    <p>
                      Edit Layanan / Produk
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('posts.all')}}" class="nav-link">
                    <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                    <p>
                      Edit Harga
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('posts.all')}}" class="nav-link">
                    <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                    <p>
                      Edit Video Review / Testimoni
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('posts.all')}}" class="nav-link">
                    <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                    <p>
                      Edit Kontak
                    </p>
                  </a>
                </li>
              </ul>
            <li class="nav-item">
              <li class="treeview
                {{ Request::segment(1) === 'user' ? 'active menu-open' : null }}
                {{ Request::segment(1) === 'role' ? 'active menu-open' : null }}
                ">
                <a href="#">
                  <i class="fa fa-gear"></i>
                  <span>SETTINGS</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview">
                  <li class="
                    {{ Request::segment(1) === 'user' ? 'active' : null }}
                    {{ Request::segment(1) === 'role' ? 'active' : null }}
                    ">
                    <a href="{{url('user') }}" title="Users">
                      <i class="fa fa-user"></i> <span> Users</span>
                    </a>
                    <a href="{{url('role') }}" title="Roles">
                      <i class="fa fa-gear"></i> <span> Roles</span>
                    </a>
                  </li>
                </ul>
              </li>
            </li> 
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
