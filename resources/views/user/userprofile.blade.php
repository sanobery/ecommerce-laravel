@extends('layout')

@section('head-content')
  <style>

    .nav{
      margin-left:12%;
    }
   

  </style>
@endsection

@section('body-content')

  <nav class="nav" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="#">Profile</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="">Default</a></li>
    </ol>
  </nav>

  <div class="container">
    <div class="accordion" id="accordionExample">

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            Update Personal Information
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <form action="signUp" method="POST" id="form">
              @csrf
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" placeholder="First-Name" class="form-control my-2 p-2" id="First-Name" name="firstName" value={{session('first_name')}}>
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
                    <button type="submit" id="btn" class="btn btn-outline-dark my-2 p-2 form-control">Update</button>
                  </div>
                </div>
    
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            View Orders
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Your Extra Detail
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection