<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>


  <link rel="stylesheet" href="user.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

  <link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
crossorigin="anonymous"
/>

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
crossorigin="anonymous"
/>

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
crossorigin="anonymous"
/>

<link rel="stylesheet" href="../../dist/css/adminlte.css" />

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
crossorigin="anonymous"
/>

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
crossorigin="anonymous"
/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  

</head>


<!--begin::Header-->
<nav class="main-header navbar navbar-expand shadow-lg " style="height: 6vh; background-color: rgb(255, 255, 255);" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item navHover">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color: rgb(71, 102, 129); font-weight: 800; font-family: monospace; font-size: 1.5em;">
          <i class="fas fa-bars" ></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block navHover">
        <a href="/dashboard" class="nav-link" style="color: rgb(71, 102, 129); font-weight: 800; font-family: monospace; font-size: 1.4em;">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block navHover">
        <a href="#" class="nav-link" style="color: rgb(71, 102, 129); font-weight: 800; font-family: monospace; font-size: 1.4em;">Contact</a>
      </li>
    </ul>
  
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
  
      <!-- Messages Dropdown Menu -->

      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- Chat items here -->
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <!-- More chat items... -->
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> --}}
  
      <!-- Notifications Dropdown Menu -->
      {{-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <!-- More notif items... -->
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> --}}
  
      
  
      <!-- User Menu -->
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <span class="d-none d-md-inline" style="color: rgb(71, 102, 129); font-weight: 800; font-family: monospace; font-size: 1.2em;">{{Auth::user()->name}}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <li class="user-header bg-dark">
            <p>
              {{ Auth::user()->name }}
              <small>Member Since {{ Auth::user()->created_at }}</small>
            </p>
          </li>
          <li class="user-footer">
            <button type="submit" class="btn btn-secondary rounded">Logout</button>
          </li>
        </ul>
      </li>

      <!-- Fullscreen -->
      <li class="nav-item navHover" >
        <a class="nav-link" data-widget="fullscreen" href="#" role="button" style="color: rgb(71, 102, 129); font-weight: 800; font-family: monospace; font-size: 1.2em;">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!--end::Header-->

  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed height: 6vh; background-color: rgb(255, 255, 255);">
  
    <a href="#" class="brand-link">
        <span class="brand-text font-weight" style="color: rgb(71, 102, 129); font-weight: 800; font-family: monospace; font-size: 1.6em;">We Tasks</span>
    </a>

  
    <div class="sidebar">
       
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                


                <li class="nav-item navHover">
                    <a href="/" class="nav-link" style="color: rgb(71, 102, 129); font-weight: 800; font-family: monospace; font-size: 1.6em;">
                        <i class="bi bi-briefcase-fill"></i>
                      <p>
                        Home
                      </p>
                    </a>
                  </li>

                <li class="nav-item navHover">
                    <a href="/tasks" class="nav-link" style="color: rgb(71, 102, 129); font-weight: 800; font-family: monospace; font-size: 1.6em;">
                        <i class="bi bi-person-vcard-fill"></i>
                        
                        <p>
                          Tasks
                        </p>
                    </a>
                </li>
                
                
                <li class="nav-item navHover">
                    <a href="/materi" class="nav-link" style="color: rgb(71, 102, 129); font-weight: 800; font-family: monospace; font-size: 1.6em;"> 
                        <i class="bi bi-book"></i>
                        
                        <p>
                          Contact
                        </p>
                    </a>
                </li>
            </ul>

            <div class="m-2 navHover" style="position: absolute; bottom: 0; left: 70px;"  >
              <form action="{{ url('logout') }}" method="POST" >

                @csrf

              <button type="submit" class="btn rounded" style="color: rgb(255, 255, 255); font-weight: 600; font-family: monospace; font-size: 1.5em; background-color: rgb(77, 105, 129);">Logout</button>

                </form>
          </div>

        </nav>
    </div>
</aside>


<body class="hold-transition sidebar-mini">

  

  
  <div class="wrapper">
    <div class="content-wrapper p-5">
      @yield('content')
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/jquery.overlayScrollbars.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"></script>



  
  <script src="user.js"></script>
</body>
</html>

