@extends('layout')


@section('title')
  men
@endsection

@section('head-content')
  <link rel="stylesheet" href="/css/carddisplay.css">
@endsection

@section('body-content')
  @include('item.product')
@endsection

@section('script')
  <script src="{{mix('js/men.js')}}"></script>
  <script src="{{mix('js/product.js')}}"></script>
@endsection