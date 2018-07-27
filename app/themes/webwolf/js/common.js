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
                1200: {
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

        $('input[type="radio"]').parent().addClass('before');
        $('input[type="checkbox"]').parent().addClass('before');

        checkedButton();
        checkedCheckbox();

        $('input[type="radio"], input[type="checkbox"]').on('click', function() {
            checkedButton();
            checkedCheckbox();
        })

    }]);

    $(".site-header__btn").on('click', function(e) {
        e.preventDefault();
        $('.site-header__mobile-menu').toggleClass('active');
    });

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

    $('*[data-modal="modal"]').on('click', function(e) {
        e.preventDefault();

        var id = $(this).attr('href');

        $(id).fadeToggle('700', 'linear')
            .css('display', 'flex');

    });

    $('.modal__placeholder, .modal__close').on('click', function() {
       $('.modal').fadeOut('700', 'linear');
    });


    // Паралакс

    $(window).bind('scroll',function(e){
        parallaxScroll();
    });

    function parallaxScroll(){
        var scrolled = $(window).scrollTop();
        $('.parallax').css('top',(0-(scrolled*.25))+'px');
    }


});
