$(document).ready(function () {

  $('#createProduct').on('click', function () {
    $('#productId').val(null);
    $('#productSrc').val(null);
    $('#productName').val(null);
    $('#productDesc').val(null);
    $('#categoryId').val(null);
    $('#productModal').modal('show');
  });

  $('#form1').on('submit', function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    // var productId = $('#productId').val();
    // var ProductSrc = $('#productSrc').val();
    // var productName = $('#productName').val();
    // var productDesc = $('#productDesc').val();
    // var categoryId = $('#categoryId').val();
    $.ajax({
      url: '/productlist',
      type: 'POST',
      data: formData,
      processData: false,
      dataType: 'json',
      contentType: false,
      // data: {
      //   productId: productId,
      //   productSrc: ProductSrc,
      //   productName: productName,
      //   productDesc: productDesc,
      //   categoryId: categoryId,
      // },
      success: function (message) {
        console.log(message);
        $('#message').html(message);
        $('#productModal').modal('hide');
      },
      error: function (error) {
        var formErr = error.responseJSON.errors;
        $('.formError').html('');
        for (var err in formErr) {
          $('.' + err).html(formErr[err][0]);
        }
      }
    });
  });

  $('.editProduct').on('click', function () {
    console.log($(this).attr('data-product_src'));
    $('#productId').val($(this).attr('data-product_id'));
    $('#productSrc').val(null);
    // $('#productSrc').val($(this).attr('data-product_src'));
    $('#productName').val($(this).attr('data-product_name'));
    $('#productDesc').val($(this).attr('data-product_desc'));
    $('#categoryId').val($(this).attr('data-category_id'));
    $('#productModal').modal('show');
  });

  $('#deleteConfirm').on('click', function () {
    // console.log("clicked", $(this).val());
    $.ajax({
      url: "/deleteitem",
      type: "POST",
      data: {
        product_id: $(this).val()
      },
      success: function (message) {
        alert("Item Deleted ", message, "!");
        $('#staticBackdrop1').modal('hide');
      },
      error: function () {
        alert("Error");
      }
    });
  });

  $('.removeProduct').click(function () {
    $('#staticBackdrop1').modal('show');
    $('#deleteConfirm').val($(this).attr('data-product_id'));
    // console.log("clicked", $(this).attr("data-product_id"));
    // deleteThis($(this).attr("data-product_id"));
  });

  // function deleteThis(id) {
  //   console.log(id);
  //   $.ajax({
  //     url: "/deleteitem",
  //     type: "POST",
  //     data: {
  //       product_id: id,
  //       category: 2
  //     },
  //     success: function (message) {
  //       alert("Item Deleted ", message, "!");
  //     }
  //     // error: function () {
  //     //   alert("Error");
  //     // }
  //   });
  // }

});
