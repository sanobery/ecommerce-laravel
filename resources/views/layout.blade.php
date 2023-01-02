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
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
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
            <a class="nav-link" aria-current="page" href="/index.html">Home</a>
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
          <button type="button" class="btn">
            <a href="{{route('login')}}" class="font">
            {{Session::get('user')}}
            </a>
          </button>
          @else
          <button type="button" class="btn">
            <a href="{{route('login')}}" class="font">
              {{-- Log-in |{{Session::get('user')}} --}}
              <i class="fa fa-user"></i>
            </a>
          </button>
        </div>
        <div class="d-block me-auto mb-2 mb-lg-0 text-center">
          <a href="{{route('register')}}" class="font">
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
    </div>
    @endif
  </nav>

  @yield('body-content')

  <!-- Footer of Page -->
  <footer class="mt-3 foot">
    <div class="d-flex bg-dark">
      <div class="col-lg-6 mt-4">
        <ul class="foot1 text-white">
          <li>HOME</li>
          <li>COLLECTIONS</li>
          <li>NEW FEATURES</li>
          <li>SPECIAL</li>
        </ul>
      </div>
      <div class="col-lg-6 mt-4">
        <ul class="foot1 text-light">
          <li>
            <i class="fa fa-envelope ">&nbsp;&nbsp;</i>
            myshop@gmail.com
          </li>
          <li>
            <i class="fa fa-instagram">&nbsp;&nbsp;</i>
            myshop.insta
          </li>
          <li>
            <i class="fa fa-twitter">&nbsp;&nbsp;</i>
            myshop_tweet
          </li>
          <li>
            <i class="fa fa-facebook">&nbsp;&nbsp;</i>
            myshop.com
          </li>
        </ul>
      </div>
    </div>
  </footer>


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