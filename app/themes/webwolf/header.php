<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebWolf24
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fragment" content="!">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!--    <link href="//deliveryWiget.iiko.ru/v2_0/assets/css/style.css" rel="stylesheet" type="text/css" media="screen" />-->
    <script type="text/javascript">
        window.jStoreConfig = {
            'restaurant' : '51db4588-4cd5-11e5-80c1-d8d385655247',
            'templates' : [
                {
                    'type': 'cart#count',
                    'template': '#count-header',
                },
                {
                    'type': 'catalogItem',
                    'template': '#product-template'
                },
                {
                    'type': 'cart#checkout->cartItem',
                    'template': '#checkout-template-cart'
                },
                {
                    'type': 'cart#checkout',
                    'template': '#checkout-template'
                }
            ]
        };
    </script>
    <script data-main="//deliverywiget.iiko.ru/v2_0/app/config" src="//deliverywiget.iiko.ru/v2_0/libs/require.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'webwolf24' ); ?></a>

    <div class="site-header__ancore"></div>
	<header id="masthead" class="site-header">
        <a href="#" class="site-header__btn">Меню</a>
        <div class="site-header__mobile-logo">
            <a href="/">
                <img src="/app/uploads/2018/07/small.png" alt="">
            </a>
        </div>
        <div class="site-header__mobile-menu">
            <div id="lsp-block-tree" class="lsp-block-menu-tree"></div>
            <nav id="site-navigation" class="site-sidebar__menu">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            </nav><!-- #site-navigation -->
            <div class="site-sidebar__day">
                <p class="site-sidebar__time-work">
                    <?php if(!get_theme_mod('time_work_from') == '') : ?>
                        <?php echo get_theme_mod('time_work_from') ?>
                    <?php endif; ?>
                </p>
                <p class="site-sidebar__time-work">
                    <?php if(!get_theme_mod('time_work_to') == '') : ?>
                        <?php echo get_theme_mod('time_work_to') ?>
                    <?php endif; ?>
                </p>
            </div>
            <div class="site-header__contact">
                <?php if(!get_theme_mod('phone_1') == '') : ?>
                    <a class="site-sidebar__phone" href="tel:<?php echo get_theme_mod('phone_1') ?>"><?php echo get_theme_mod('phone_1') ?></a>
                <?php endif; ?>
                <?php if(!get_theme_mod('phone_2') == '') : ?>
                    <a class="site-sidebar__phone" href="tel:<?php echo get_theme_mod('phone_2') ?>"><?php echo get_theme_mod('phone_2') ?></a>
                <?php endif; ?>
                <a class="site-sidebar__order" href="#">Заказать звонок</a>
            </div>
            <div class="site-header__application">
                <div class="site-sidebar__mobile">
                    <?php if(!get_theme_mod('app_store') == '') : ?>
                        <a class="apple" href="<?php echo get_theme_mod('app_store', '#') ?>"></a>
                    <?php endif; ?>
                    <?php if(!get_theme_mod('google_play') == '') : ?>
                        <a class="android" href="<?php echo get_theme_mod('google_play', '#') ?>"></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="site-header__social">
                <div class="site-sidebar__social">
                    <?php if(!get_theme_mod('vk') == '') : ?>
                        <a class="vk" href="<?php echo get_theme_mod('vk', '#') ?>" target="_blank"></a>
                    <?php endif; ?>
                    <?php if(!get_theme_mod('insta') == '') : ?>
                        <a class="insta" href="<?php echo get_theme_mod('insta', '#') ?>" target="_blank"></a>
                    <?php endif; ?>
                    <?php if(!get_theme_mod('fb') == '') : ?>
                        <a class="facebook" href="<?php echo get_theme_mod('fb', '#') ?>" target="_blank"></a>
                    <?php endif; ?>
                    <?php if(!get_theme_mod('ok') == '') : ?>
                        <a class="ok" href="<?php echo get_theme_mod('ok', '#') ?>" target="_blank"></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="site-header__wrapper">
            <div id="lsp-block-tree" class="lsp-block-menu-tree site-header__menu owl-carousel"></div>
        </div>
        <div id="count" class="lsp-block-cart"></div>
	</header><!-- #masthead -->


    <!-- Шаблоны -->
    <!-- ссылка на корзину в хедере -->
    <script id='count-header' type='text/template'>
        <a href="/checkout/#!/order" class="site-header__checkout">
            <div id="count" class="site-header__count"><%= totalItems %></div>
        </a>
    </script>

    <!-- карточки товаров -->
    <script id='product-template' type='text/template'>
        <div class="jstore-tag lsp-block-item-image">
            <div class="jstore-tag lsp-block-item-image-link jstore-js-detailLink">
                <% if(tags.length){ %><div class="jstore-tag lsp-block-item-tags"><% _.each(tags, function(tag){ %><!--
        --><span data-id="<%= tag.translitName %>" class="jstore-tag lsp-block-item-tag <%= tag.className %>" title="<%= tag.name %>"></span><!--
    --><% }); %></div><% } %>
                <img class="jstore-tag" title="<%= name %>"
                     data-jstore-src="largeImageUrl">
            </div>
        </div>
        <% if(tags.length){ %><div class="jstore-tag lsp-block-item-tags"><% _.each(tags, function(tag){ %><!--
        --><span data-id="<%= tag.translitName %>" class="jstore-tag lsp-block-item-tag <%= tag.className %>" title="<%= tag.name %>"></span><!--
    --><% }); %></div><% } %>
        <div class="jstore-tag lsp-block-item-name">
            <span class="jstore-tag jstore-js-detailLink"><%= name %></span>
        </div>
        <div class="jstore-tag lsp-block-item-price">
        <span class="jstore-tag lsp-block-item-price-value"
          data-jstore-value="cost"></span> <span class="jstore-tag lsp-block-item-measurement"><%= jStoreApp.getCurrency()%></span>
        </div>
        <div class="block-hidden">
            <div class="jstore-tag lsp-js-typeModifiers-block">
                <div class="jstore-tag lsp-modifier-group lsp-js-types-container"></div>
            </div>
            <div class="jstore-tag lsp-block-item-description"
                 data-jstore-value="description"></div>
            <div class="lsp-block-item-weight">
                <%= weight * 1000 %> г.
            </div>
            <span class="jstore-tag lsp-block-item-add-to-cart jstore-js-addToCart lsp-button">~ Заказать ~</span>
        </div>
    </script>

    <!-- Товар в корзине -->
    <script id='checkout-template-cart' type='text/template'>
        <div class="checkout__item">
            <div class="checkout__item-image">
                <img class="jstore-tag" title="<%= name %>"
                     data-jstore-src="mediumImageUrl" src="<%= mediumImageUrl %>">
            </div>
            <div class="checkout__item-info">
                <div class="jstore-tag lsp-block-cart-item-row lsp-block-cart-item-row-name">
                    <%= name %>
                    <span class="lsp-js-modifier-tail"><%= typesTail %></span></b>
                </div>
                <div class="jstore-tag lsp-block-cart-item-row lsp-block-cart-item-row-subname">
                    <span class="jstore-tag lsp-button-minus lsp-button-minus lsp-js-item-minus"></span>
                    <span class="jstore-tag lsp-button-plus lsp-js-item-plus"></span>
                    <input class="jstore-tag lsp-block-cart-item-amount-c-count" name="count" value="<%= amount %>">
                </div>
                <div class="jstore-tag lsp-block-cart-item-price-c">
                    <span class="jstore-tag lsp-block-cart-item-price-c-count lsp-js-price"><%= price %></span>
                    <span class="jstore-tag lsp-block-cart-item-price-c-type"> <%= jStoreApp.getCurrency()%></span>
                </div>
            </div>
            <span class="jstore-tag lsp-button-cross lsp-button-red lsp-js-item-delete">x</span>
        </div>
    </script>

    <!-- Корзина -->
    <script id='checkout-template' type='text/template'>
        <div class="jstore-tag lsp-block-cart-inner">
            <div class="jstore-tag ordered-left-block lsp-cart-items-list"></div>
            <div class="jstore-tag lsp-info-message-bottom">
                <div class="jstore-tag jstore-cart-total">
                    <span class="checkout__price-finish"><%= jStoreApp.t('Total')%>:</span> <span class="jstore-tag lsp-block-cart-total"><span class="jstore-js-cart-total-value"><%= totalCost %></span> <%= jStoreApp.getCurrency()%></span><br>
                </div>
                <div class="checkout__minimum">
                    Минимальный заказ: 500 р.
                </div>
            </div>
        </div>
    </script>

    <div id="silder" class="modal">
        <div class="modal__placeholder"></div>
        <div class="modal__content">
            <div class="modal__close"></div>
            <?php echo do_shortcode('[text-blocks id="'. get_theme_mod('popup_slider', '') .'"]'); ?>
        </div>
    </div>

    <div id="<?= get_theme_mod('job') ?>" class="modal modal__job">
        <div class="modal__placeholder"></div>
        <div class="modal__content">
            <div class="modal__close"></div>
            <?= do_shortcode('[contact-form-7 id="'. get_theme_mod('job') .'"]'); ?>
        </div>
    </div>



	<div id="content" class="site-content">
