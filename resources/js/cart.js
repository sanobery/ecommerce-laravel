$(document).ready(function cartitem() {

    let tableData = "";
    let sum = 0;
    const localItems = JSON.parse(localStorage.getItem("items"));
    localItems.map((data) => {
        tableData +=
            '<tr>' +
            '<td class="align-middle"><img src="' + 'assets/' + data.itemSrc + '" alt="" style="width: 50px;"> ' + data.itemName + '</td>' +
            '<td class="align-middle">' +
            data.itemSize +
            '</td>' +
            '<td class="align-middle">' +
            data.itemPrice +
            '</td>' +
            '<td class="align-middle">' +
            '<div class="input-group quantity mx-auto" style="width: 100px;">' +
            '<div class="input-group-btn">' +
            '<button class="btn btn-sm btn-primary btn-minus quantityDecrease" data-id = "' + data.itemId + '" data-size = "' + data.itemSize + '" data-quantity = "' + data.no + '" data-src = "' + data.itemSrc + '">' +
            '<i class="fa fa-minus"></i>' +
            '</button>' +
            '</div>' +
            '<input type="text" class="form-control form-control-sm bg-secondary text-center" value="' + data.no + '">' +
            '<div class="input-group-btn">' +
            '<button class="btn btn-sm btn-primary btn-plus quantityIncrease" data-id = "' + data.itemId + '" data-size = "' + data.itemSize + '" data-quantity = "' + data.no + '" data-src = "' + data.itemSrc + '">' +
            '<i class="fa fa-plus"></i>' +
            '</button>' +
            '</div>' +
            '</div>' +
            '</td>' +
            '<td class="align-middle">' + data.no * data.itemPrice + '</td>' +
            '<td class="align-middle"><button class="btn btn-sm btn-primary delete" data-id = "' + data.itemId + '" data-size = "' + data.itemSize + '" data-quantity = "' + data.no + '" data-src = "' + data.itemSrc + '">' +
            '<i class="fa fa-trash"></i>' +
            '</button></td>' +
            '</tr>';
        sum = sum + parseInt(data.no * data.itemPrice);
    });
    $('#tablebody').html(tableData);
    $('.subtotal').html(sum);
    var total = sum + 10;
    $('.total').html(total);

    $('.quantityDecrease').on('click', function () {
        var local = JSON.parse(localStorage.getItem("items"));
        local.map((data) => {
            if (
                data.itemId == $(this).data('id') &&
                data.no > 1 &&
                data.itemSize == $(this).data('size')
            ) {
                data.no = data.no - 1;
            }
        });
        localStorage.setItem("items", JSON.stringify(local));
        cartitem();
    });

    $('.quantityIncrease').on('click', function () {
        var local = JSON.parse(localStorage.getItem("items"));
        local.map((data) => {
            if (
                data.itemSrc == $(this).data('src') &&
                data.itemSize == $(this).data('size')
            ) {
                data.no = data.no + 1;
            }
        });
        localStorage.setItem("items", JSON.stringify(local));
        cartitem();
    });

    $('.delete').on('click', function () {
        var c = JSON.parse(localStorage.getItem("items")).filter(
            (Product) => ((Product.itemSrc != $(this).data('src') && Product.itemSize != $(this).data('size')))
        );
        localStorage.setItem("items", JSON.stringify(c));
        cartitem();
    });

    $('.proceedToBuy').on('click', function () {
        console.log("click");
    });

});   
