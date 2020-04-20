(function () {
    'use strict';
    let loaded =
        REALESTATE.global.home = function () {
            $('body').addClass('stop-scroll');
            $('html').addClass('stop-scroll');
            window.setTimeout(function () {
                $('body').removeClass('stop-scroll');
                $('html').removeClass('stop-scroll');
            }, 3000);
        }
})();