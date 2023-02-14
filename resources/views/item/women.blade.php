@extends('layouts.header')

@section('title')
    women 
@endsection

@section('head-content')
    <link rel="stylesheet" href="{{mix('/css/carddisplay.css')}}">
@endsection

@section('body-content')

    @include('item.product')
    @include('layouts.footer')

@endsection

@section('script')

    <script src="{{mix('js/product.js')}}"></script>
    <script src="{{mix('js/women.js')}}"></script>
    
@endsection