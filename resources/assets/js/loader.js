(function () {
    'use strict';
    REALESTATE.global.loader = function () {
        $('body').addClass('stop-scroll');
        $('html').addClass('stop-scroll');
            window.setTimeout(function () {
                const loader = $(".loader-box");
                let property = $(".property");
                loader.css('z-index', -1);
                loader.css('opacity', 0);
                property.css('opacity', 1);
                property.css('z-index', -10);
                $('body').removeClass('stop-scroll');
                $('html').removeClass('stop-scroll');
            }, 1000);
    }
})();