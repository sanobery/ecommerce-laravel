<!doctype html>
<html lang="en">

<!-- Head Tag with different Link tag -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{csrf_token()}}">

  <title>@yield('title','sanober')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{mix('css/layout.css')}}">
  @yield('head-content')

</head>

<body>
  <!-- Navbar of page -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand d-flex justify-content-between align-items-center order-lg-0" href="#">
        <span class="text-uppercase ms-2">MyShop.com</span>
      </a>
      <div class="order-lg-1">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse order-lg-1" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item px-2 py-2">
            <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item px-2 py-2">
            <a class="nav-link" aria-current="page" href="#">Collections</a>
          </li>
          <li class="nav-item px-2 py-2">
            <div class="dropdown d-inline-block justify-content-center align-items-center">
              <a class="btn btn-muted dropdown-toggle text-muted" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Shop Now
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="{{route('kid')}}">Kids</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('lady')}}">Women</a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('men')}}">Men</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item px-2 py-2">
            <a class="nav-link" aria-current="page">Contact-Us</a>
          </li>
        </ul>
        <div class="d-block me-auto mb-2 mb-lg-0 text-center">
          @if(Session::get('user'))
            <div class="btn-group">
              <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                {{Session::get('user.first_name')}}
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('user')}}">Profile</a></li>
                <li><a class="dropdown-item" href="#">Change Password</a></li>
                <li><a class="dropdown-item" href="#">Orders</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('logout')}}">log-out</a></li>
              </ul>
            </div>
          @else
          <button type="button" class="btn">
            <a href="{{route('login')}}" class="font">
              <i class="fa fa-user"></i>
            </a>
          </button>
        </div>
        <div class="d-block me-auto mb-2 mb-lg-0 text-center">
          <a href="{{route('homepage')}}" class="font">
            <i class="fa fa-shopping-cart"></i>
          </a>
          <span id="lblCartCount"></span>
        </div>
        <form class="d-flex ms-2" role="search">
          <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-sm btn-outline-muted" type="submit">
            <i class="fa fa-search font"></i>
          </button>
        </form>
      </div>
      @endif
    </div>
  </nav>

  @yield('body-content')

 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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