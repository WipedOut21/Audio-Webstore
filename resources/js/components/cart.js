$(document).ready(function () {
    $('.increment-quantity-btn').click(function (e) {
        e.preventDefault();

        const product_data = $(this).closest('#product_data');
        const product_id = product_data.find('.product_id').text();
        let quantity_element = product_data.find('.product_quantity');
        const quantity = parseInt(quantity_element.text()) + 1;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        e.disabled = true;

        $.ajax({
            url: '/api/cart/' + product_id,
            method: "PATCH",
            data: {
                'quantity': quantity,
            },
            error: function () {
                e.enabled = true;
            },
            success: function () {
                e.enabled = true;
                window.location.reload();
            }
        })
    });

    $('.decrement-quantity-btn').click(function (e) {
        e.preventDefault();

        const product_data = $(this).closest('#product_data');
        const product_id = product_data.find('.product_id').text();
        let quantity_element = product_data.find('.product_quantity');
        const quantity = parseInt(quantity_element.text()) - 1;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        e.disabled = true;

        $.ajax({
            url: '/api/cart/' + product_id,
            method: "PATCH",
            data: {
                'quantity': quantity,
            },
            error: function () {
                e.enabled = true;
            },
            success: function () {
                e.enabled = true;
                window.location.reload();
                // if (quantity <= 0) {
                //     window.location.reload();
                // }
                // quantity_element.text(quantity);
            }
        })
    });

    $('.checkout-btn').click(function (e) {
        e.preventDefault();
        window.location = "/cart/checkout";
    });
});
