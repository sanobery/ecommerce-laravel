@extends('layouts.header')

@section('head-content')
    <link rel="stylesheet" href="{{mix('css/profile.css')}}">
@endsection

@section('body-content')

    <hr>
    

    <div class="profilecontainer">
    </div>


    <div class="container">
        <div class="row">
        <div class="col-lg-6">
            <div class="card ms-4" style="width: 25rem;">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
                <h4 class="card-title text-primary text-opacity-75">Personal Information</h4>
            <div class="card-body">
                @if(Session::has('user'))
                <table class="table table-striped table-hover">
                <tr>
                    <td>First-Name : </td>
                    <td>{{Session::get('user.first_name')}}</td>
                </tr>
                <tr>
                    <td>Last-Name : </td>
                    <td>{{Session::get('user.last_name')}}</td>
                </tr>
                <tr>
                    <td>Email &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;: </td>
                    <td>{{Session::get('user.email')}}</td>
                </tr>
                </table>
                @endif
                <a href="{{route('updatedetail')}}" class="btn btn-danger">Update Information</a>
            </div>
            </div>
        </div>
        <div class="col-lg-6">
            {{-- <img src="/assets/shop1.jpeg" width="100%" height="100%">  --}}
        </div>
        </div>
    </div>

@endsection