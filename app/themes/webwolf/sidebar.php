<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebWolf24
 */

?>

<div class="site-sidebar__ancore">
    <div class="site-sidebar">
        <div>
            <div class="site-sidebar__logo">
                <?php the_custom_logo(); ?>
            </div>
            <p class="site-sidebar__city">г. УФА</p>
        </div>
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
        <div>
            <?php if(!get_theme_mod('phone_1') == '') : ?>
                <a class="site-sidebar__phone" href="tel:<?php echo get_theme_mod('phone_1') ?>"><?php echo get_theme_mod('phone_1') ?></a>
            <?php endif; ?>
            <?php if(!get_theme_mod('phone_2') == '') : ?>
                <a class="site-sidebar__phone" href="tel:<?php echo get_theme_mod('phone_2') ?>"><?php echo get_theme_mod('phone_2') ?></a>
            <?php endif; ?>
            <a class="site-sidebar__order" href="#">Заказать звонок</a>
        </div>
        <nav id="site-navigation" class="site-sidebar__menu">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
            ?>
        </nav><!-- #site-navigation -->
        <div class="site-sidebar__mobile">
            <?php if(!get_theme_mod('app_store') == '') : ?>
                <a class="apple" href="<?php echo get_theme_mod('app_store', '#') ?>"></a>
            <?php endif; ?>
            <?php if(!get_theme_mod('google_play') == '') : ?>
                <a class="android" href="<?php echo get_theme_mod('google_play', '#') ?>"></a>
            <?php endif; ?>
        </div>
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
        <div class="site-sidebar__conf">
            © Sushimania 2018
            <br>
            <a href="politika-v-otnoshenii-obrabotki-personalnyh-dannyh/">Политика конфиденциальности</a>
        </div>
    </div>
</div>


