function getProducts(categoryValue, sizeId = [], colorId = []) {
  $.ajax({
    url: "/get_products",
    type: "POST",
    data: {
      category: categoryValue,
      size: sizeId,
      color: colorId
    },
    success: function (response) {
      var htmlelement = "";
      var arraycheck = [];
      for (var i = 0; i < response.products.length; i++) {
        var choices = "";
        for (var j = 0; j < response.size.length; j++) {
          if (response.products[i].product_id == response.size[j].product_id) {
            choices += '<option>'
              + response.size[j].size_option
              + '</option>';
          }
        }

        if (!arraycheck.includes(response.products[i].product_id)) {
          htmlelement +=
            '<div class = "col-12 col-lg-3">' +
            '<div class = "card cardinline mb-3">' +
            '<img src = "' + 'assets/' + response.products[i].product_src +
            '" class = "card-img-top img-responsive imgsize" alt = "..." >' +
            '<div class = "card-body">' +
            '<h5 class = "card-title">' +
            response.products[i].product_name +
            '</h5>' +
            '<select class = "sizeselect">' +
            '<option>' +
            'Select size' +
            '</option>' +
            choices +
            '</select>' +
            '<br>' +
            '<button class = "btn btn-sm btn-primary">' +
            'Add To Cart' +
            '</button>' +
            '</div>' +
            '</div>' +
            '</div>';
          arraycheck.push(response.products[i].product_id);
        }
      }

      if (htmlelement != "") {
        $('#div1').html(htmlelement);
      }
      else {
        $('#div1').html('<h3 class="text-danger">' + "OOPS!!! No Items Founds." + '</h3>');
      }
    }
  });
}

