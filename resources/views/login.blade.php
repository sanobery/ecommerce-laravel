@extends('layout')

@section('title')

  login

@endsection

@section('head-content')

  <link rel="stylesheet" href="{{mix('css/login.css')}}">

@endsection

@section('body-content')

  <section class="form my-4 mx-5">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-5">
          <img src="/assets/login.jpg" class="img-fluid" alt="" height="100%">
        </div>
        <div class="col-lg-7 px-5">
          <h1 class="mt-2 fw-light">LOG-IN</h1>
          <h6 class="py-1">Sign into Your Account</h6>
          <form action="/login.php" method="post" id="form">
            <div class="form-row">
              <div class="col-lg-7">
                <input type="text" placeholder="email@xyz.com" class="form-control my-2 p-2 formelement"
                  data-validate="required|emailCheck|min:10|max:40" name="email" id="email">
                <span class="error text-danger" name="error" id="error-email"></span>
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <input type="text" placeholder="********" class="form-control my-2 p-2 formelement"
                  data-validate="required|passwordCheck|min:8|max:25" name="password" id="password">
                <span class="error text-danger" name="error" id="error-password"></span>
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <button type="submit" id="btn" class="btn btn-dark my-2 p-2 form-control">LOG-IN</button>
              </div>
            </div>

            <a href="#" class="px-2"><em>Forgot Password</a></em>

            <em class="px-2">Don't Have an Account?
              <a href="/views/signup.html">&nbsp;Sign-Up</a>
            </em>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection



@section('script')
  <script src="/jquery/formvalidationquery.js"></script>
@endsection

@section('title')
  arij
@endsection
