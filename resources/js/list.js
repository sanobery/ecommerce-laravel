$(document).ready(function () {

    $('#productlist').dataTable({
        responsive: true,
        "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        iDisplayLength: 5,
        dom: 'Bfrtip',
        // order: [[4, "asc"]],
        language: {
            search: "Find Product",
            info: "_TOTAL_ -   Total Products",
        },
        buttons: ['pageLength',
            {
                text: 'All Products',
                extend: 'pdf',
                // split: ['copy', 'excel', 'csv'],
                exportOptions: {
                    rows: function (idx, data, node) {
                        return data[4] == 1 ? true : false;
                    }
                }
            }
        ],
    });

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
        $.ajax({
            url: '/productlist',
            type: 'POST',
            data: formData,
            processData: false,
            dataType: 'json',
            contentType: false,
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
        $('#productId').val($(this).attr('data-product_id'));
        $('#productSrc').val(null);
        $('#productName').val($(this).attr('data-product_name'));
        $('#productDesc').val($(this).attr('data-product_desc'));
        $('#categoryId').val($(this).attr('data-category_id'));
        $('#productModal').modal('show');
    });

    $('#deleteConfirm').on('click', function () {

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
                $('#staticBackdrop1').modal('hide');
            }
        });

    });

    $('.removeProduct').on('click', function () {
        $('#staticBackdrop1').modal('show');
        $('#deleteConfirm').val($(this).attr('data-product_id'));
    });

    $('#deny').on('click', function () {
        $('#staticBackdrop1').modal('hide');
    });

    $('#close').on('click', function () {
        $('#productModal').modal('hide');
    });

});
