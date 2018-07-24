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
                1316: {
                    nav: false
                }
            }
        });
        $('#lsp-block-items-list .lsp-block-item').on('click', function(e) {
            $(this).toggleClass('active');
        });

        // Замена url в меню
        var link = $('#lsp-block-tree .lsp-js-block-tree-item');

        $.each(link, function(index, el) {
           var href = $(el).attr('href').split("#", 2);

            $(el).attr('href', '/main/#' + href[1]);
        });
    }]);

    $(".site-header__btn").on('click', function(e) {
        e.preventDefault();
        $('.site-header__mobile-menu').toggleClass('active');
    });

});