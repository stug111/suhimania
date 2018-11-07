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

        $("select").select2({
            minimumResultsForSearch: -1
        });

        // Замена url в меню
        var link = $('#lsp-block-tree .lsp-js-block-tree-item');

        $.each(link, function(index, el) {
           var href = $(el).attr('href').split("#", 2);

            $(el).attr('href', '/main/#' + href[1]);
        });

    }]);

    jStoreEvents.push(['pageChanged', null, function(data){

        if($('*').is('.lsp-block-success-order')) {
            $('.jstore-cart-total, .checkout__minimum').hide();
        }

        $('.site-header__mobile-menu li a').on('click', function() {
            $('html, body').scrollTop(0);
            $('.site-header__mobile-menu').removeClass('active');

        })

    }]);



    $(".site-header__btn").on('click', function(e) {
        e.preventDefault();
        $('.site-header__mobile-menu').toggleClass('active');
    });

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
