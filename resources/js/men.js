$(document).ready(function () {
    var colorId = [];
    var sizeId = [];
    $('.flexCheck').on('click', function () {
        sizeId = [];
        $('.flexCheck').each(function (index, element) {
            if ($(element).is(':checked')) {
                sizeId.push(parseInt($(this).attr("data-id")));
                //console.log("click", $(element).val(), text);
            }
        });
        getProducts([3], sizeId, colorId);
    });
    $('.flexCheckColor').on('click', function () {
        colorId = [];
        $('.flexCheckColor').each(function (index, element) {
            if ($(element).is(':checked')) {
                colorId.push(parseInt($(this).attr("data-id")));
                // console.log("click", $(element).val());
            }
        });
        getProducts([3], sizeId, colorId);
    });
    getProducts([3]);
});
