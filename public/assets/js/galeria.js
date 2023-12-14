"use strict"
$(document).ready(function () {
    // Show selected carousel based on the option selected
    $('#carouselSelector').on('change', function () {
        let selectedCarousel = $(this).val();
        $('.carousel').hide();
        $('#' + selectedCarousel).show();
    });
});