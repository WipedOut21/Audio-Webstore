$(document).ready(function () {
    $('.view-cart-btn').click(function (e) {
      e.preventDefault();
      window.location = "/cart";
    });
    $('.add-to-cart-btn').click(function (e) {
        e.preventDefault();
        e.disabled = true

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#showloading').show();
        const product_id = $('.product_id').text();
        const product_name = $('.product_name').text();
        const price = parseFloat($('.product_price').text().substring(4));
        const cart_loader = $('#cart_loader');

        cart_loader.css('display', 'inline')

        $.ajax({
            url: '/api/cart',
            method: "POST",
            data: {
                'quantity': 1,
                'product_id': product_id,
                'title': product_name,
                'price': price
            },
            error: function (response) {
                window.location = "/login";
                cart_loader.hide();
            },
            success: function (response) {
                e.enabled = true;
                cart_loader.hide();
                window.location.reload();
            }
        })
    });
});
