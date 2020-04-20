(function () {
    'use strict';
    $(document).ready(function () {
        switch($("body").data("page-id")) {
            case 'home':
                REALESTATE.global.carousel();
                break;
            case 'listing':
                REALESTATE.global.loader();
                break;
            default:
        }
    })
})();
