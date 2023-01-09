@extends('admin.admin')
@section('head-content')
  <link rel="stylesheet" href="{{mix('css/adminsidebar.css')}}">
@endsection


@section('body-content')
  @include('admin.sidebar')
  <div class="mainbody">
   
    <div class="row mt-4">

      <div class="col-lg-3 ms-4 mt-4 mb-4">
        <div class="bg-info d-flex justify-content-center">
          <div class="inner">
            <h3>{{$userCount}}</h3>
            <p>Registered-User</p>
          </div>
        </div>
      </div>

      &nbsp; &nbsp; &nbsp;
      <div class="col-lg-3 ms-4 mt-4 mb-4">
        <div class="bg-warning d-flex justify-content-center">
          <div class="inner">
            <h3>{{$sizeCount}}</h3>
            <p>Sizes</p>
          </div>
        </div>
      </div>

      &nbsp; &nbsp; &nbsp;
      <div class="col-lg-3 ms-4 mt-4 mb-4">
        <div class="bg-danger d-flex justify-content-center">
          <div class="inner">
            <h3>{{$colourCount}}</h3>
            <p>Colors</p>
          </div>
        </div>
      </div>

    </div>
  </div>



  <hr>

@endsection