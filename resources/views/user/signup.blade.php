@extends('layouts.header')

@section('title')
    Sign-Up
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
                            <button type="submit" id="btn" class="btn btn-outline-dark my-2 ms-2 px-2 form-control">SIGN-UP</button>
                            </div>
                        </div>
            
                        <em class="mt-3 px-2">Already have an Account?
                            <a class="mb-2" href="{{route('login')}}">&nbsp;Log-In</a>
                        </em>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection


