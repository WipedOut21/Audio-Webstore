$(document).ready(function () {


    $('#card_form').change(function(){
        const val = $('input[name=payment_radio]:checked', '#card_form').val();
        const add_payment_layout = $('#add_payment_layout')
        if (val === "add_new_card") {
            add_payment_layout.show();
       } else {
            add_payment_layout.hide();
       }
    });

    $('.save-payment-btn').click(function(e){
       e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        const card_number = parseInt($('#card-number-input').val());
        const card_expiry = $('#card-expiration-input').val();
        const card_cvv = parseInt($('#cvv-input').val());
        e.disabled = true;
        $.ajax({
            url: '/api/payment/',
            method: "POST",
            data: {
                'card_number': card_number,
                'expiry': card_expiry,
                'cvv': card_cvv
            },
            error: function (response) {
                e.enabled = true;
                alert("An error occurred saving payment info!");
            },
            success: function (response) {
                window.location.reload();
            }
        })
    });

    $('#address_form').change(function(){
        const val = $('input[name=address_radio]:checked', '#address_form').val();
        const add_payment_layout = $('#add_address_layout')
        if (val === "add_new_address") {
            add_payment_layout.show();
        } else {
            add_payment_layout.hide();
        }
    });

    $('.save-address-btn').click(function(e){
        e.preventDefault();

        const address = $('#address-input').val();
        const state = $('#state-input').val();
        const zip = parseInt($('#zip-input').val());
        const phone = parseInt($('#phone-input').val());
        e.disabled = true;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/api/address/',
            method: "POST",
            data: {
                'address': address,
                'state': state,
                'zipcode': zip,
                'phone': phone
            },
            error: function (response) {
                e.enabled = true;
                alert("An error occurred saving address info!");
            },
            success: function (response) {
                window.location.reload();
            }
        })
    });

    $('.camel').change(function() {
        const card_val = $('input[name=payment_radio]:checked', '#card_form').val();
        const address_val = $('input[name=address_radio]:checked', '#address_form').val();

        console.log(card_val, address_val);
        const make_payment_btn = $(".make-payment-btn");

        if (card_val !== "add_new_card" && address_val !== "add_new_address") {
            make_payment_btn.removeAttr("disabled");
        } else {
            make_payment_btn.attr("disabled", "disabled");
        }
    });

    $('.make-payment-btn').click(function(e) {
       e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/api/order/place',
            method: "POST",
            error: function (response) {
                e.enabled = true;
                alert("An error occurred placing order!");
            },
            success: function (response) {
                window.location = "/order/history";
            }
        })
    });
})
