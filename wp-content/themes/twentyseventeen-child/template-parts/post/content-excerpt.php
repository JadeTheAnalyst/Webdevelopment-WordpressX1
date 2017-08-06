<?php
$post_date = get_field( 'event_date');
$post_formatted_date = $post_date;
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
$post_eventbrite_id = get_field('eventbrite_id');
?>
<article class="event" id="event-<?= $post->post_name;?>">

	<h4 class="event-title"><?php echo $post->post_title;?></h4>
	
	<?php if ($post_formatted_date != ''){?>
	<div class="event-date"><?= $post_formatted_date;?></div>
	<?php } ?>
	
	<?php if($post_start_time != '' && $post_end_time != ''){?>
	<div class="event-time"><?= $post_start_time;?> to <?= $post_end_time;?></div>
	<?php }?>

	<?php if ($post_address != ''){?>
	<div class="event-address"><?= $post_address;?></div>
	<?php } ?>

	<?php if($post_eventbrite_id != ''){ ?>
	<a href="https://www.eventbrite.com/e/<?= $post_eventbrite_id;?>" target="_blank" class="">Register Now</a>
	 |
	 <a href="<?php echo basename(get_permalink()); ?>" class="">Learn More</a>
	 <?php } ?>
</article>