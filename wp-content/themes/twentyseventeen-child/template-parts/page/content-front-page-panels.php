<?php
/**
 * Template part for displaying pages on front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

global $twentyseventeencounter;

?>

<article id="panel<?php echo $twentyseventeencounter; ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<header>
				<?php if ( $post->post_name === 'events-front-page-panel' ) { ?>
					<div class="panel-heading">Upcoming Events</div>
				<?php } elseif ( $post->post_name === 'about-front-page-panel' ) { ?>
					<div class="panel-heading">About</div>
				<?php } else {
					the_title( '<div class="panel-heading">', '</div>' );
				}
				?>
				
			</header><!-- .entry-header -->

			<div class="the-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
						get_the_title()
					) );
				?>
			</div><!-- .entry-content -->

			<?php
			// Show recent blog posts if is blog posts page (Note that get_option returns a string, so we're casting the result as an int).
			if ( $post->post_name === 'events-front-page-panel' ) { ?>
				<div class="recent-posts">
				<?php
	            $recent_posts = query_promotable_events();
	            
	            if($recent_posts->have_posts() ) {
	                while($recent_posts->have_posts() ) {
	                    $recent_posts->the_post();
	                    get_template_part( 'template-parts/post/content', 'excerpt' );
	                }
	                wp_reset_postdata();
        		} else {
        		?>
        			No upcoming events.
        		<?php
        		}
        		?>
        		</div><!-- .recent-posts -->
        		<?php
        	}
        	?>
		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
