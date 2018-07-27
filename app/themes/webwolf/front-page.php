<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WebWolf24
 */

get_header();
get_sidebar();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <div class="parallax">
                <img class="image_1" src="/app/uploads/2018/07/ai-image-3-copy.png" alt="">
                <img class="image_2" src="/app/uploads/2018/07/ai-image.png" alt="">
                <img class="image_3" src="/app/uploads/2018/07/ai-image-6.png" alt="">
                <img class="image_4" src="/app/uploads/2018/07/ai-image-2-copy.png" alt="">
                <img class="image_5" src="/app/uploads/2018/07/ai-image-3.png" alt="">
                <img class="image_6" src="/app/uploads/2018/07/ai-image-5.png" alt="">
                <img class="image_7" src="/app/uploads/2018/07/ai-image-6-copy.png" alt="">
                <img class="image_8" src="/app/uploads/2018/07/ai-image-2-copy-2.png" alt="">
                <img class="image_9" src="/app/uploads/2018/07/ai-image-3-copy-2.png" alt="">
                <img class="image_10" src="/app/uploads/2018/07/ai-image-5.png" alt="">
            </div>


            <?php
            if ( have_posts() ) :


                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', 'home' );

                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
