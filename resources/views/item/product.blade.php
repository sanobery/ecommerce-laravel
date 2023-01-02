<div class="container">
  <div class="row">
    <!-- Apply Filters -->
   <div class="col-3 col-lg-2">
      <h4 class="fw-lighter">Filter By</h4>

      <h6>Size</h6>
      <div id="size">
        @foreach($sizes as $size)
        <div class = "form-check"> 
          <input class = "form-check-input flexCheck" type = "checkbox" data-id = "{{$size['size_id']}}" id = "flexCheckDefault" value = "{{$size['size_option']}}">
          <label class = "form-check-label" for = "flexCheckDefault"> 
           {{$size['size_option']}}
          </label> 
          </div>
        @endforeach
      </div>
        
      <h6>Colour</h6>
      <div id="color">
        @foreach($colors as $color)
        <div class = "form-check"> 
          <input class = "form-check-input flexCheckColor" type = "checkbox" id = "flexCheckDefault" data-id = "{{$color['color_id']}}" value = "{{$color['color_name']}}">
          <label class = "form-check-label" for = "flexCheckDefault"> 
            {{$color['color_name']}}
          </label> 
          </div>
        @endforeach
      </div>

    </div>

    <!-- Different items -->
    <div class="col-9 col-lg-10">
      <div id="div1" class="row">
        {{-- @foreach ($products as $product)
        <div class = "col-12 col-lg-3"> 
          <div class = "card cardinline mb-2">
            <img src = "assets/{{$product->product_src}}" class = "card-img-top img-responsive imgsize" alt = "..." >
            <center>
            <h5 class = "card-title">{{$product->product_name}}</h5>
            <select class = "sizeselect">
              <option>Size</option>
              <option>S</option>
              <option>M</option>
              <option>L</option>
              <option>XL</option>
              <option>XXL</option>
            </select>
            <br>
            <button class = "btn btn-sm btn-primary">Add To Cart</button>
            </center>
            <br>
          </div> 
        </div>
      @endforeach --}}
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6"></div>
      <div class="col-lg-6">
        <button class="btn btn-primary" type="button" id="loadItem">
          {{-- <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> --}}
          Load More
        </button>
      </div>
  </div>
</div>
