$(document).ready(function () {
  // $(".edit").hide();

  $('#createProduct').on('click', function () {
    $('#productSrc').val(null);
    $('#productName').val(null);
    $('#productDesc').val(null);
    $('#categoryId').val(null);
    $('#productModal').modal('show');
  });

  $("#saveProduct").click(function () {
    $.ajax({
      url: "/productlist",
      type: "POST",
      data: $('form.product').serialize(),
      success: function (message) {
        $("#message").html(message);
        $("#exampleModal").modal('hide');
      },
      error: function () {
        alert("Error");
      }
    });
  });

  $(".editProduct").click(function () {
    // $(".edit").show();
    $('#productSrc').val($(this).attr("data-product_src"));
    $('#productName').val($(this).attr("data-product_name"));
    $('#productDesc').val($(this).attr("data-product_desc"));
    $('#categoryId').val($(this).attr("data-category_id"));
    $('#productModal').modal('show');
    // console.log("clicked", $(this).attr("data-product_id"));
    // $.ajax({
    //   url: "/deleteitem",
    //   type: "POST",
    //   data: $(this).attr("data-product_id"),
    //   success: function (message) {
    //     alert("Item Deleted ", message, "!");
    //   },
    //   error: function () {
    //     alert("Error");
    //   }
    // });
  });


  $(".removeProduct").click(function () {
    // console.log("clicked", $(this).attr("data-product_id"));
    $.ajax({
      url: "/deleteitem",
      type: "POST",
      data: $(this).attr("data-product_id"),
      success: function (message) {
        alert("Item Deleted ", message, "!");
      },
      error: function () {
        alert("Error");
      }
    });
  });
});