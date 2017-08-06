<?php
/**
 * The template for displaying the events page.
 * Looks for posts that are category 'events' to display
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <header class="">
                <h1 class="page-heading">Upcoming Events</h1>
            </header><!-- .entry-header -->
            <?php
            $post_query = query_promotable_events();

            if($post_query->have_posts() ) {
                while($post_query->have_posts() ) {
                    $post_query->the_post();
                    get_template_part( 'template-parts/post/content', $post->post_name);
                }
            }

            // while ( have_posts() ) : the_post();
            // echo "<pre>";
            // print_r(get_post_link());
            // echo "</pre>";
            // echo "<h1>".basename(get_post_permalink())."</h1>";
            // echo "<h1>".the_permalink()."</h1>";
            //     if(get_the_category() == 'events'):

            //         get_template_part( 'template-parts/post/content', basename(get_permalink()) );
            //     endif;

            // endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
