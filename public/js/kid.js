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
        getProducts([1], sizeId, colorId);
    });
    $('.flexCheckColor').on('click', function () {
        colorId = [];
        $('.flexCheckColor').each(function (index, element) {
            if ($(element).is(':checked')) {
                colorId.push(parseInt($(this).attr("data-id")));
            }
        });
        getProducts([1], sizeId, colorId);
    });
    getProducts([1]);

});
