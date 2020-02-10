$(document).ready(function () {
    $(function (){
        $('.nav__link').each(function (index, item) {
            if($(item).text() === $("body").data("active-page")){
                $(item).addClass('nav__link--active');
            }
        });
        let headerElem = $('.nav');
        let logo = $('.nav__logo');
        let navMenu = $('.nav__menu');
        let navToggle = $('.nav__toggle');


        navToggle.on('click', () => {
            navMenu.css('right', '0');
        });

        $('.nav__close').on('click', () => {
            navMenu.css('right', '-100%');
        });


        $(document).scroll(() => {
            let scrollTop = $(document).scrollTop();

            if (scrollTop > 0) {
                navMenu.addClass('is-sticky');
                logo.css('color', '#000');
                headerElem.css({'background': '#fff', 'box-shadow': "0 -4px 10px 1px #999"});
                navToggle.css('border-color', '#000');
                navToggle.find('.nav__strip').css('background-color', '#000');
            } else {
                navMenu.removeClass('is-sticky');
                logo.css('color', '#fff');
                headerElem.css({'background': 'transparent', 'box-shadow': 'none'});
                navToggle.css('border-color', '#fff');
                navToggle.find('.nav__strip').css('background-color', '#fff');
            }
        });
    });
});