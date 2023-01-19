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