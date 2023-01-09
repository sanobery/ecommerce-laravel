@extends('layouts.header')

@section('body-content')
<marquee class="fw-bold offer">Upto 50% Sale on Winter wear Grab the Offer now.</marquee>

<!-- Section of page with different container -->
<div class="container">
  <div class="row ms-2 d-flex justify-content-between align-items-center">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/assets/i10.webp" class="d-block midsectionimg" alt="...">
          <button class="btn" id="shopnow">
            shopnow
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<section id="how-it-works">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h2 class="upp-txt text-center">How to Proceed</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12 text-center steps">
        <p><img src="http://localhost:8080/images/icon-step1.png" alt=""></p>
        <h3>1. Select<br>
            Product</h3>
        <p>We offer a variety of products, according to the
            season.</p>
      </div>
    <div class="col-lg-3 col-md-6 col-12 text-center steps">
      <p><img src="http://localhost:8080/images/icon-step2.png" alt=""></p>
      <h3>2. Enter Delivery<br>
          Location</h3>
      <p>We Deliver in Pan India.</p>
    </div>
    <div class="col-lg-3 col-md-6 col-12 text-center steps">
      <p><img src="http://localhost:8080/images/icon-step3.png" alt=""></p>
      <h3>3. Select <br>
          Payment Mode</h3>
      <p>Choose a payment mode and proceed further. </p>
    </div>
      <div class="col-lg-3 col-md-6 col-12 text-center steps">
        <p><img src="http://localhost:8080/images/icon-step4.png" alt=""></p>
        <h3>4. Manage Your<br>
            Member Account</h3>
        <p>Update your contact info, change your location.</p>
      </div>
    </div>
  </div>
</section>


<div class="container midsection">
  <div class="row mt-4">
    <div class="col-lg-4">
      <div class="card">
        <img src="/assets/kids.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kids Dress</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn">Shop Now</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <img src="/assets/shoes.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Shoes & Snikkers</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn">Shop Now</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <img src="/assets/kurti.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">kurti & Set</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

@endsection

