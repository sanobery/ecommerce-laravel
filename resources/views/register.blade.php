@extends('layout')
@section('title')
 register
@endsection

@section('head-content')
  <link rel="stylesheet" href="/css/cart.css?v=1">
@endsection

@section('body-content')
  <!-- Item from Local Storage with Dyanmic Function of size, price and quantity -->
  <div id="imgcont">
  </div>

  <div class="container">
    <h1 class="mb-3 text-center fw-lighter">
      Shopping Cart
    </h1>
    <table class="table table-striped">
      <thead class="fw-light text-muted">
        <tr>
          <th class="scope">Product</th>
          <th class="scope">Name</th>
          <th class="scope">Size</th>
          <th class="scope">Quantity</th>
          <th class="scope">Price</th>
          <th class="text-right scope">
            <span id="amount" class="amount">
              Amount
            </span>
          </th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody id="tablebody">

      </tbody>
      <tfoot>
        <td colspan="6"></td>
        <td text-align="right">
          <strong>Total = $<span id="total" class="total"></span></strong>
        </td>
      </tfoot>
    </table>
  </div>

  <!-- Fill Details of user -->
  <section class="form my-4 mx-5">
    <div class="container mt-5">
      <div class="row row-no-gutters">
        <div class="col-lg-1">
        </div>
        <div class="col-12 col-lg-10 px-5">
          <h1 class="mt-2 fw-light justify-content-center">Fill Details</h1>
          <form action="/register.php" method="post" id="form" name="form">

            <div class="row">
              <div class="col-12 col-lg-6">
                <input type="text" placeholder="First-Name" class="form-control my-2 p-2 formelement" id="first_name"
                  name="first_name" data-validate="required|isAlpha|min:3|max:20">
                <span class="error text-danger" name="error" id="error-first_name"></span>
              </div>
              <div class="col-12 col-lg-6">
                <input type="text" placeholder="Last-Name" class="form-control my-2 p-2 formelement" id="last_name"
                  name="last_name" data-validate="required|isAlpha|min:3|max:20">
                <span class="error text-danger" name="error" id="error-last_name"></span>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-lg-6">
                <input type="text" placeholder="email@xyz.com" class="form-control my-2 p-2 formelement" id="email"
                  name="email" data-validate="required|emailCheck|min:10|max:40">
                <span class="error text-danger" name="error" id="error-email"></span>
              </div>
              <div class="col-12 col-lg-6">
                <input type="text" placeholder="********" class="form-control my-2 p-2 formelement" id="password"
                  name="password" data-validate="required|passwordCheck|min:8|max:25">
                <span class="error text-danger" name="error" id="error-password"></span>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-lg-6">
                <textarea type="text" placeholder="Full Address" class="form-control my-2 p-2 formelement" id="address"
                  name="address" data-validate="required|max:50"></textarea>
                <span class="error text-danger" name="error" id="error-address"></span>
              </div>
              <div class="col-12 col-lg-6">
                <input type="text" placeholder="pincode" class="form-control my-2 p-2 formelement" id="pincode"
                  name="pincode" data-validate="required">
                <span class="error text-danger" name="error" id="error-pincode"></span>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-2">
              </div>
              <div class="col-lg-8">
                <span id="buttonError"></span>
                <button type="submit" id="btn" name="checkOut"
                  class="btn btn-outline-primary my-2 p-2 form-control">Check-Out</button>
              </div>
            </div class="col-lg-2">
        </div>
        </form>
      </div>
    </div>
    </div>
    </div>
  </section>

@endsection

@section('script')
  <script src="/jquery/cartjquery.js?v=1"></script>
  <script src="/jquery/formvalidationquery.js"></script>
@endsection