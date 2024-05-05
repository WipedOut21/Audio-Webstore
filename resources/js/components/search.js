$(document).ready(function() {
    const searchNavbar = $('#search-navbar');

    $('#nav-search-form').submit(function(e) {
        e.preventDefault();
        if (searchNavbar.val() === '') {
            return;
        }

        window.location = "/search/" + searchNavbar.val();
    })
});
