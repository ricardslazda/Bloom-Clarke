(function () {
    'use strict';
    REALESTATE.global.carousel = function () {
        $('.landing__listings').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: "<i class='fa fa-angle-left landing__left-icon' aria-hidden='true'></i>",
            nextArrow: "<i class='fa fa-angle-right landing__right-icon' aria-hidden='true'></i>",
            adaptiveHeight: true
        });
    }
})();