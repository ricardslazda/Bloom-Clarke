(function () {
    'use strict';
    REALESTATE.global.loader = function () {
        $('body').addClass('stop-scroll');
            window.setTimeout(function () {
                const loader = $(".loader");
                let property = $(".property");
                loader.css('opacity', 0);
                property.css('opacity', 1);
                $('body').removeClass('stop-scroll');
            }, 1500);
    }
})();
