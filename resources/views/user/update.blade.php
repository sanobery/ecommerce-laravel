@extends('layouts.header')

@section('body-content')

    <div class="container">

        <div class="row">
        <div class="col-lg-2"></div>

        <div class="col-lg-8"> 
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Update Your Detail
                </button>
                </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <form action="updatedetail" method="POST" id="form">
                    {{csrf_field()}}
                    {{-- @csrf --}}
                    @if(Session::has('user'))
                    <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">User_id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" value="{{Session::get('user.user_id')}}" name="userId" readonly>
                    </div>
                    </div>
                    <br>
                    <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">First-Name : </label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="firstName" value="{{Session::get('user.first_name')}}">
                    </div>
                    </div>
                    <br>
                    <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Last-Name : </label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="lastName" value="{{Session::get('user.last_name')}}">
                    </div>
                    </div>
                    <br>
                    <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    </div>
                    <div class="col-auto">
                        <input type="email" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="email" value="{{Session::get('user.email')}}">
                    </div>
                    </div>
                    <br>
                    <div class="row g-2 align-items-center">
                    <div class="col-auto">
                        <button class="btn btn-primary">Update</button>
                    </div>
                    </div>
                    @endif
                </form>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-2"></div>
        </div>
        
    </div>
 
@endsection