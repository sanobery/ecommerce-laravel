@extends('admin.admin')

@section('body-content')
    <section class="form my-4 mx-5 bg-secondary">

        <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10 px-5">
            <h1 class="mt-2 fw-bold">ADMIN</h1>
            <h1 class="mt-2 fw-light">LOG-IN</h1>
            <h6 class="py-1">Sign into Your Account</h6>
            @if(Session::has('message'))
                <p class="alert alert-danger">{{ Session::get('message') }}</p>
            @endif
            <form action="admin" method="post" id="form">
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
            </form>
            </div>
        </div>
        </div>

    </section>
@endsection


