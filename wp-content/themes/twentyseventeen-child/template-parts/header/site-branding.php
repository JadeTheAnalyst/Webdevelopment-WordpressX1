<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<div class="site-branding">
	<div class="wrap">

		<?php 
		the_custom_logo();
		//display event to promote in the header area if there is one
		$page_slug = $post->post_name;
		$post_query = query_promotable_events();
        if($post_query->have_posts() && ($page_slug == 'home'/* || $page_slug == 'events'*/)) :
        ?>
    	<div class="event-takeover">
	    	<?php
	        	$post_query->the_post();
	        	get_template_part( 'template-parts/header/header-featured-event', $post->post_name );
	        	wp_reset_postdata();
	        ?>
    	</div>
        <?php else: ?>
        	
		<div class="site-branding-text blue">
			<div class="repeat-img"></div>
			<div class="text">
				<?php if ( is_front_page() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>

				<?php
				$description = get_bloginfo( 'description', 'display' );

				if ( $description || is_customize_preview() ) :
				?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php endif; ?>
			</div>
		</div><!-- .site-branding-text -->
		<?php endif;?>
	</div><!-- .wrap -->
</div><!-- .site-branding -->