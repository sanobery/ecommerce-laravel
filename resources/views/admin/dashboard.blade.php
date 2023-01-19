{{-- @extends('admin.admin')
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

@endsection --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    @if(Session::has('admin'))
        <a class="fw-bold pull-right" href="{{route('adminlogout')}}">{{Session::get('admin.admin_id')}}|logout</a>
    @endif
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
 
    <script> console.log('Hi!'); </script>
@stop