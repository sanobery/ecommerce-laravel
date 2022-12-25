@extends('layout')

@section('title')
  kid 
@endsection

@section('head-content')
  <link href = "{{mix('css/carddisplay.css')}}">
@endsection

@section('body-content')
  @include('item.product')
@endsection

@section('script')

  <script src = "{{mix('js/kid.js')}}"></script>
  <script src = "{{mix('js/product.js')}}"></script>

@endsection()