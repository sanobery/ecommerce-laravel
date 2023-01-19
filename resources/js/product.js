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
                        '<div class="col-lg-4 col-md-6 col-sm-12 pb-1">' +
                        '<div class="card product-item border-0 mb-4">' +
                        '<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">' +
                        '<img class="img-fluid w-100 imgsize" src="' + '/storage/Uploads/' + response.products[i].product_src + '" alt="">' +
                        '</div>' +
                        '<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">' +
                        '<h6 class="text-truncate mb-3">' + response.products[i].product_name + '</h6>' +
                        '<div class="d-flex justify-content-center">' +
                        '<h6 data-price="' + response.products[i].product_id + '"></h6>' +
                        '</div>' +
                        '</div>' +
                        '<select class = "sizeselect" data-id="' + response.products[i].product_id + '">' +
                        '<option>' +
                        'Select size' +
                        choices +
                        '</option>' +
                        '</select>' +
                        '<div class="card-footer d-flex justify-content-between bg-light border">' +
                        '<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>' +
                        '<a href="" class="btn btn-sm text-dark p-0 addToCart" data-id="' + response.products[i].product_id + '" data-src="' + response.products[i].product_src + '" data-name="' + response.products[i].product_name + '" data-category-id="' + response.products[i].category_id + '"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    arraycheck.push(response.products[i].product_id);
                }
            }

            $('.div1').html(htmlelement);
        }
    });
}

var count = 0, size = "", prices = 0;
$("body").off().on("click", '.addToCart', function () {
    count++;
    let items = [];
    if (typeof Storage !== "undefined") {
        let cartitem = {
            itemId: $(this).data('id'),
            itemSrc: $(this).data('src'),
            itemName: $(this).data('name'),
            itemSize: sizeOption,
            itemPrice: prices,
            no: 1,
        };
        if (JSON.parse(localStorage.getItem("items") === null)) {
            items.push(cartitem);
            localStorage.setItem("items", JSON.stringify(items));
        }
        else {
            let productExist = false;
            const localitems = JSON.parse(localStorage.getItem("items"));
            localitems.map((data) => {
                if (cartitem.itemSrc == data.itemSrc && cartitem.itemSize == data.itemSize) {
                    data.no += 1;
                    productExist = true;
                }
            });
            if (!productExist)
                localitems.push(cartitem);

            localStorage.setItem("items", JSON.stringify(localitems));
        }
    }

});
$(document).on('change', '.sizeselect', function () {
    sizeOption = $(this).val();
    productId = $(this).attr('data-id');

    $.ajax({
        url: "/get_prices",
        type: "POST",
        data: {
            productId: productId,
            sizeOption: sizeOption,
        },
        success: function (price) {
            prices = price.price[0].product_price;
            id = price.price[0].product_id;
            $('[data-price = "' + id + '"]').html(prices);
        }
    });

});



