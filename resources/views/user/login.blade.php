@extends('layouts.header')

@section('title')
  login
@endsection

@section('head-content')
  <link rel="stylesheet" href="{{mix('css/login.css')}}">
@endsection

@section('body-content')
@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
  <section class="form my-4 mx-5">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-5">
          <img src="/assets/login.jpg" class="img-fluid" alt="" height="100%">
        </div>
        <div class="col-lg-7 px-5">
          <h1 class="mt-2 fw-light">LOG-IN</h1>
          <h6 class="py-1">Sign into Your Account</h6>
          @if(Session::has('status'))
            <p class="alert alert-info">{{ Session::get('status') }}</p>
          @endif
          <form action="login" method="post" id="form">
            @csrf
            <div class="form-row">
              <div class="col-lg-7">
                <input type="text" placeholder="email@xyz.com" class="form-control my-2 p-2 formelement"
                name="email" id="email" value={{old('email')??''}} >
                  @if($errors->has('email'))
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->get('email') as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul> 
                  </div>
                @endif
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <input type="password" placeholder="********" class="form-control my-2 p-2 formelement"
                name="password" id="password" value={{old('password')??''}} >
                @if($errors->has('password'))
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->get('password') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                  </ul> 
                </div>
              @endif
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <button type="submit" id="btn" class="btn btn-dark my-2 p-2 form-control">LOG-IN</button>
              </div>
            </div>

            <a href="#" class="px-2"><em>Forgot Password</a></em>

            <em class="px-2">Don't Have an Account?
              <a href="{{route('signup')}}">&nbsp;Sign-Up</a>
            </em>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('script')
@endsection

