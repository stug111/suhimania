jQuery(document).ready(function($) {

    window.jStoreEvents = window.jStoreEvents ? window.jStoreEvents : [];

    jStoreEvents.push(['ready', null, function(data){
        $(".owl-carousel").owlCarousel({
            autoWidth: true,
            dots: false,
            navText: ['<i class="arrow-header-left">', '<i class="arrow-header-right">'],
            responsive: {
                0: {
                    nav: true
                },
                1367: {
                    nav: false
                }
            }
        });

        // Замена url в меню
        var link = $('#lsp-block-tree .lsp-js-block-tree-item');

        $.each(link, function(index, el) {
           var href = $(el).attr('href').split("#", 2);

            $(el).attr('href', '/main/#' + href[1]);
        });

    }]);

    jStoreEvents.push(['pageChanged', null, function(data){

        $('.lsp-block-item').on("touchstart", function (e) {
            'use strict'; //satisfy code inspectors
            var link = $(this); //preselect the link
            if (link.hasClass('hover')) {
                link.removeClass('hover');
                return false;
            }
            else {
                link.addClass('hover');
                $('.lsp-block-item').not(this).removeClass('hover');
                e.preventDefault();
                return false; //extra, and to make sure the function has consistent return points
            }
        });

        if($('*').is('.lsp-block-success-order')) {
            $('.jstore-cart-total, .checkout__minimum').hide();
        }

        $('input[type="radio"]').parent().addClass('before');
        $('input[type="checkbox"]').parent().addClass('before');

        checkedButton();
        checkedCheckbox();

        $('input[type="radio"], input[type="checkbox"]').on('click', function() {
            checkedButton();
            checkedCheckbox();
        });

        $('.site-header__mobile-menu li a').on('click', function() {
            $('html, body').scrollTop(0);
            $('.site-header__mobile-menu').removeClass('active');

        });

        $('.lsp-js-submit').on('click', function() {

            setTimeout(function() {

                $('input[type="radio"]').parent().addClass('before');
                $('input[type="checkbox"]').parent().addClass('before');

                checkedButton();
                checkedCheckbox();

                $('input[type="radio"], input[type="checkbox"]').on('click', function() {
                    checkedButton();
                    checkedCheckbox();
                });
            }, 1500);
        });

    }]);



    $(".site-header__btn").on('click', function(e) {
        e.preventDefault();
        $('.site-header__mobile-menu').toggleClass('active');
    });

    /*
     * Переключение чекбоксов и радио кнопок
     */
    function checkedButton () {
        var radio = $('input[type="radio"]');

        $.each(radio, function(index, el) {
           if( $(el).prop('checked') == true ) {
               $(this).parent().addClass('after');
           } else {
               $(this).parent().removeClass('after');
           }

        });
    }

    function checkedCheckbox () {
        var checkbox = $('input[type="checkbox"]');

        $.each(checkbox, function(index, el) {
            if( $(el).prop('checked') == true ) {
                $(this).parent().addClass('after-checkbox');
            } else {
                $(this).parent().removeClass('after-checkbox');
            }

        });
    }

    /*
     * Модалки
     */
    $('*[data-modal="modal"]').on('click', function(e) {
        e.preventDefault();

        var id = $(this).attr('href');

        $(id).fadeToggle('700', 'linear')
            .css('display', 'flex');
        $('body').addClass('overflow');

    });

    $('.modal__placeholder, .modal__close').on('click', function() {
       $('.modal').fadeOut('700', 'linear');
        $('body').removeClass('overflow');
    });


    /*
     *  Паралакс
     */

    $(window).bind('scroll',function(e){
        parallaxScroll();
    });

    function parallaxScroll(){
        var scrolled = $(window).scrollTop();
        $('.parallax').css('top',(0-(scrolled*.25))+'px');
    }

});
