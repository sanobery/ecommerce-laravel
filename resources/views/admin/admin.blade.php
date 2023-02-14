<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link rel="stylesheet" href="{{mix('css/style.css')}}">
    @yield('head-content')
  </head>
  <body>

    <div class="container-fluid">
      <div class="row bg-secondary py-2 px-xl-5">
          <div class="col-lg-6 d-none d-lg-block">
              <div class="d-inline-flex align-items-center">
                  <a class="text-dark" href="">FAQs</a>
                  <span class="text-muted px-2">|</span>
                  <a class="text-dark" href="">Help</a>
                  <span class="text-muted px-2">|</span>
                  <a class="text-dark" href="">Support</a>
              </div>
          </div>
          <div class="col-lg-6 text-center text-lg-right">
              <div class="d-inline-flex align-items-center">
                  <a class="text-dark px-2" href="">
                      <i class="fab fa-facebook-f"></i>
                  </a>
                  <a class="text-dark px-2" href="">
                      <i class="fab fa-twitter"></i>
                  </a>
                  <a class="text-dark px-2" href="">
                      <i class="fab fa-linkedin-in"></i>
                  </a>
                  <a class="text-dark px-2" href="">
                      <i class="fab fa-instagram"></i>
                  </a>
                  <a class="text-dark pl-2" href="">
                      <i class="fab fa-youtube"></i>
                  </a>
              </div>
          </div>
      </div>
      <div class="row align-items-center py-3 px-xl-5">
          <div class="col-lg-3 d-none d-lg-block">
              <a href="" class="text-decoration-none">
                  <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">My</span>Shop</h1>
              </a>
          </div>
      </div>
  </div>

    {{-- <div class="container-fluid">
      <div class="row border-top px-xl-5">
        @yield('topbar-nav')
          <div class="col-lg-9">
              <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                  <a href="" class="text-decoration-none d-block d-lg-none">
                      <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">My</span>Shop</h1>
                  </a>
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                      <div class="navbar-nav mr-auto py-0">
                          <a href="{{route('homepage')}}" class="nav-item nav-link">Home</a>
                          <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Shop</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{route('kid')}}" class="dropdown-item">Kids</a>
                                <a href="{{route('lady')}}" class="dropdown-item">Women</a>
                                <a href="{{route('men')}}" class="dropdown-item">Men</a>
                            </div>
                          </div>
                          <a href="detail.html" class="nav-item nav-link">Shop Detail</a>
                          <div class="nav-item dropdown">
                              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                              <div class="dropdown-menu rounded-0 m-0">
                                  <a href="{{route('cart')}}" class="dropdown-item">Shopping Cart</a>
                                  <a href="checkout.html" class="dropdown-item">Checkout</a>
                              </div>
                          </div>
                          <a href="contact.html" class="nav-item nav-link">Contact</a>
                      </div>
                      <div class="navbar-nav ml-auto py-0">
                          @if(Session::has('user'))
                               <a href="{{route('logout')}}" class="nav-item nav-link">{{Session::get('user.first_name')}}</a> 
                              <div class="nav-item dropdown">
                                  <a href="{{route('logout')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Session::get('user.first_name')}}</a>
                                  <div class="dropdown-menu rounded-0 m-0">
                                      <a href="{{route('cart')}}" class="dropdown-item">Profile</a>
                                      <a href="{{route('logout')}}" class="dropdown-item">Log-Out</a>
                                  </div>
                              </div>
                          @else
                              <a href="{{route('login')}}" class="nav-item nav-link">Login</a>
                          @endif
                          <a href="{{route('signup')}}" class="nav-item nav-link">Register</a>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
    </div>  --}}
    {{-- <nav class="navbar sticky-top navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MyShop</a>
        @if(Session::has('admin'))
        <a class="text-light fw-bold pull-right" href="{{route('adminlogout')}}">logout|{{Session::get('admin.admin_id')}}</a>
         {{-- @include('admin.breadcrum')
        @endif
      </div>
    </nav> --}}
    @yield('body-content')

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    </script>
    @yield('script')
  </body>
</html>

