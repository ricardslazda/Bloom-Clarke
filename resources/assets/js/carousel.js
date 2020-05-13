        let mediaQuery = window.matchMedia( "(max-width: 768px)" );
        if(mediaQuery.matches) {
            console.log('one slide');
            $('.landing__listings').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: "<i class='fa fa-angle-left landing__left-icon' aria-hidden='true'></i>",
                nextArrow: "<i class='fa fa-angle-right landing__right-icon' aria-hidden='true'></i>",
                adaptiveHeight: true,
                swipe: true
            });
        } else {
            console.log('two slides');
            $('.landing__listings').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                prevArrow: "<i class='fa fa-angle-left landing__left-icon' aria-hidden='true'></i>",
                nextArrow: "<i class='fa fa-angle-right landing__right-icon' aria-hidden='true'></i>",
                adaptiveHeight: true
            });
        }