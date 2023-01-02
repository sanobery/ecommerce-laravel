@extends('layout')

@section('title')
  Sign-Up
@endsection

@section('head-content')
  <link rel="stylesheet" href="{{mix('css/signup.css')}}">
@endsection

@section('body-content')

  <section class="form my-4 mx-5 mb-3">
    <div class="container mt-5">
      <div class="row row-no-gutters">
        <div class="col-lg-5">
          <img src="/assets/login.jpg" class="img-fluid" alt="" height="100%">
        </div>
        <div class="col-lg-7 px-5">
          <h1 class="mt-2 fw-light">SIGN-UP</h1>
          <h6 class="py-1">Create Your Account</h6>
          <form action="signUp" method="POST" id="form">
            @csrf
            <div class="row">
              <div class="col-lg-6">
                <input type="text" placeholder="First-Name" class="form-control my-2 p-2" id="First-Name" name="firstName" value={{old('firstName')??''}}>
                @if($errors->has('firstName'))
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->get('firstName') as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul> 
                  </div>
                @endif
              </div>
              <div class="col-lg-6">
                <input type="text" placeholder="Last-Name" class="form-control my-2 p-2" id="Last-Name" name="lastName" value={{old('lastName')??''}}>
                @if($errors->has('lastName'))
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->get('lastName') as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                    </ul> 
                  </div>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <input type="email" placeholder="email@xyz.com" class="form-control my-2 p-2" id="Email" name="email" value={{old('email')??''}}>
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
              <div class="col-lg-6">
                <input type="password" placeholder="********" class="form-control my-2 p-2" id="Password" name="password" value={{old('password')??''}}>
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

              <div class="row">
                <div class="col-lg-12">
                  <button type="submit" id="btn" class="btn btn-outline-dark my-2 p-2 form-control">SIGN-UP</button>
                </div>
              </div>
   
              <em class="px-2">Already have an Account?
                <a class="mb-2" href="{{route('login')}}">&nbsp;Log-In</a>
              </em>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection



{{-- @section('script') --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
  <script> --}}

      {{-- $.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Only Alphabetic Character is allowed");

      $.validator.addMethod("password",function(value, element) {
        return this.optional(element) || /^[A-Z]{1}[A-Za-z0-9\d=!\-@._*]{7,}$/i.test(value);
      },"Should starts with Capital Letter & much have special character and a number.");
    
      $('#form').validate({
      rules:{
        firstName:{
          required:true,
          minlength:3,
          lettersonly: true 
        },
        lastName:{
          required:true,
          minlength:3,
          lettersonly: true 
        },
        email:{
          required:true,
          email:true
        },
        password:{
          required:true,
          password:true
        }
      },
      messages:{
        firstName:{
          required:'Please Enter Your First-Name*',
          minlength:'Minimum Length Should be 3'
        },
        lastName:{
          required:'Please Enter Your First-Name*',
          minlength:'Minimum Length Should be 3'
        },
        email:{
          required:'Please Enter Email*',
          email:'Please Enter Valid Email*'
        },
        password:{
          required:'Please Enter Password*',
        }
      }
    });
    // console.log('hii');
  </script>
@endsection --}}

