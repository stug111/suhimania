<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebWolf24
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php $stocks = CFS()->get( 'stock_block' );
        if( ! empty($stocks) ): ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <?php foreach ( $stocks as $key => $stock ) { ?>
                            <?php

                                ($key%2) ? $class = 'before-list' : $class = 'after-list';

                            ?>
                            <div class="stock__block" style="background: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url('<?= $stock['stock_image'] ?>') no-repeat center center / cover">
                                <h2 class="stock__title <?= $class ?>">
                                    <?= $stock['stock_title'] ?>
                                </h2>
                                <div class="stock__sub-title <?= $class ?>">
                                    <?= $stock['stock_description'] ?> <span>*</span>
                                </div>
                                <div class="stock__bottom">
                                    <span>*</span> <?= $stock['stock_advanced'] ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

