<?php
$post_content = $post->post_content;
$post_content = apply_filters('the_content', $post_content);
$post_date = get_field( 'event_date');

// try {
//     $post_date = new DateTime($post_date);
//     $post_formatted_date = $post_date->format('F j, Y');
// } catch (Exception $e) {
//     echo $e->getMessage();
//     exit(1);
// }
$post_formatted_date = $post_date;
$post_start_time = get_field( 'event_start_time');
$post_end_time = get_field( 'event_end_time');
$post_address = get_field('event_location');
$post_eventbrite_id = get_field( 'eventbrite_id');
?>

<div class="site-branding-text blue">
	<div class="repeat-img"></div>

	<div class="text">
		<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>					
		<p class="site-description">presents its latest training event&hellip;</p>
	</div>
</div>

<article class="event" id="event-<?= $post->post_name;?>">
	<div class="event-title with-lead"><?php echo $post->post_title;?></div>
	<div class="event-subtitle lead">by John C. Maxwell</div>
	<div class="event-detail event-date"><?=$post_formatted_date;?></div>
	<div class="event-detail event-time"><?= $post_start_time;?> to <?= $post_end_time;?></div>
	<div class="event-detail event-address"><?= $post_address;?></div>
	
	<div class="cta-wrapper">
		<div class="col">
			<a href="https://www.eventbrite.com/e/<?= $post_eventbrite_id;?>" target="_blank" class="cta primary">Register Now</a>
		</div>

		<div class="col">
			<a href="<?php echo basename(get_permalink()); ?>" class="cta secondary">Learn More</a>
		</div>
	</div>
</article>