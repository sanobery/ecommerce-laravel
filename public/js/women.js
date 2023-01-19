$(document).ready(function () {
    var colorId = [];
    var sizeId = [];

    $('.flexCheck').on('click', function () {
        sizeId = [];
        $('.flexCheck').each(function (index, element) {
            if ($(element).is(':checked')) {
                sizeId.push(parseInt($(this).attr("data-id")));
            }
        });
        getProducts([2], sizeId, colorId);
    });

    $('.flexCheckColor').on('click', function () {
        colorId = [];
        $('.flexCheckColor').each(function (index, element) {
            if ($(element).is(':checked')) {
                colorId.push(parseInt($(this).attr("data-id")));
            }
        });
        getProducts([2], sizeId, colorId);
    });

    getProducts([2]);

    // $('#loadItem').on('click', function () {
    //   var loadItem = "";
    //   loadItem += ' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>  Loading...';
    //   $('#loadItem').html(loadItem);
    // });

});
