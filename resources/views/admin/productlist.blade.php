@extends('adminlte::page')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/fh-3.1.4/r-2.2.2/sc-1.5.0/sl-1.2.6/datatables.min.css"/>
    {{-- <link rel="stylesheet" href="{{mix('css/adminsidebar.css')}}"> --}}
@endsection


@section('content')

    <div class="container mainbody">
        <div class="col-sm-12 mt_10 mb_10 BorderTopDivider">
        <h4 class="text-success text-bold mt-2">Product Available</h4>
        <table class="table table-hover customCssTable width_full" id="productlist">
            <button type="button" class="btn btn-primary mb-3" id="createProduct" data-bs-toggle="modal" data-bs-target="#exampleModal">Create</button>
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                </div>
                <form method="post" class="product" name="form1" id="form1" enctype="multipart/form-data;charset=utf-8"> 
                    <div class="modal-body">
                    <div id="message" class="text-success"></div>
                    <input type="hidden" class="form-control mb-3" name="productId" id="productId" readonly>
                    <div class="form-group mb-2">
                        Product Image : <input type="file" class="form-control" name="productSrc" id="productSrc">
                        <span class="text-danger productSrc formError"></span>
                    </div>
                    <div class="form-group mb-2">
                        <label for="productName">Product Name : </label>
                        <input type="text" class="form-control" name="productName" id="productName" >
                        <span class="text-danger productName formError"></span>
                    </div>
                    <div class="form-group mb-2">
                        Product Desc : <textarea type="text" class="form-control" name="productDesc" id="productDesc"></textarea>
                        <span class="text-danger productDesc formError"></span>
                    </div>
                    <div class="form-group mb-2">
                        Category Id: 
                        <select class="form-select form-control" name="categoryId" id="categoryId">
                        <option>Select From Here</option>
                        <option value="1">Kid</option>
                        <option value="2">Women</option>
                        <option value="3">Men</option>
                        <option value="4">Unisex</option>
                        </select>
                        <span class="text-danger categoryId formError"></span>
                    </div>
                    </div>
                    
                    <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                    <button type="submit" class="btn btn-success" id="saveProduct">Save</button> 
                    </div>
                </form>
                </div>
            </div>
            </div>
            <thead>
            <tr>
                <th class="text-left">ProductId</th>
                <th class="text-left">Product Image</th>
                <th class="text-left">Product Name</th>
                <th class="text-left">Product Desc</th>
                <th class="text-left">Category Id</th>
                <th class="text-left">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                <td>{{$product['product_id']}}</td>
                <td>
                    <img src="{{asset('/storage/Uploads/'.$product['product_src'])}}" class="img img-thumbnail">

                </td>
                <td>{{$product['product_name']}}</td>
                <td>{{$product['product_desc']}}</td>
                <td>{{$product['category_id']}}</td> 
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-info mb-2 editProduct"  data-product_id="{{$product['product_id']}}" 
                    data-product_src="{{$product['product_src']}}" data-product_name="{{$product['product_name']}}" data-product_desc="{{$product['product_desc']}}" data-category_id="{{$product['category_id']}}">
                    <i class="fa fa-edit"></i>Edit
                    </button>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-danger px-2 py-2 removeProduct" data-product_id="{{$product['product_id']}}">
                    <i class="fa fa-trash"></i>Delete
                    </button>
                
                </td>
                </tr>
            @endforeach
            </tbody>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Product</h1>
                </div>
                <div class="modal-body">
                    Confirm if You want to Delete this Product ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="deny">Deny</button>
                    <button type="button" class="btn btn-danger" id="deleteConfirm">Confirm</button>
                </div>
                </div>
            </div>
            </div>
        </table>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="{{mix('js/list.js')}}"></script>
@endsection


