@extends('layout')

@section('title')

  women 

@endsection

@section('body-content')
  @include('item.product')
@endsection

@section('script')
  <script src="{{mix('js/product.js')}}"></script>
  <script src="{{mix('js/women.js')}}"></script>
@endsection