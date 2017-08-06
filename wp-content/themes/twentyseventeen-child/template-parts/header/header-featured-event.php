<?php
$post_content = $post->post_content;
$post_content = apply_filters('the_content', $post_content);
$post_date = get_field( 'event_date');
$post_formatted_date = get_field( 'event_date');
// try {
//     $post_date = new DateTime($post_date);
//     $post_formatted_date = $post_date->format('F j, Y');
// } catch (Exception $e) {
//     echo $e->getMessage();
//     exit(1);
// }
$post_start_time = get_field( 'event_start_time');
$post_end_time = get_field( 'event_end_time');
$post_address = get_field('event_location');
$post_eventbrite_id = get_field( 'eventbrite_id');
?>

<div class="site-branding-text blue">
	<div class="repeat-img"></div>

	<div class="text">
		<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>					
		<p class="site-description">presents&hellip;</p>
	</div>
</div>

<article class="event" id="event-<?= $post->post_name;?>">
	<div class="event-title"><?php echo $post->post_title;?></div>
<!-- 	<div class="event-subtitle">by John C. Maxwell</div> -->
	
	<?php if($post_formatted_date != ''){?>
	<div class="event-detail event-date">When: <?=$post_formatted_date;?></div>
	<div class="event-detail event-time">Time: <?= $post_start_time;?> to <?= $post_end_time;?></div>
	<?php } ?>
	
	<?php if($post_address != ''){?>
	<div class="event-detail event-address"><?= $post_address;?></div>
	<?php } ?>

	<div class="cta-wrapper">
		<div class="col">
			<a href="https://www.eventbrite.com/e/<?= $post_eventbrite_id;?>" target="_blank" class="cta primary">Register Now</a>
		</div>

		<div class="col">
			<a href="https://www.eventbrite.com/e/<?= $post_eventbrite_id;?>" class="cta secondary">Learn More</a>
		</div>
	</div>
</article>