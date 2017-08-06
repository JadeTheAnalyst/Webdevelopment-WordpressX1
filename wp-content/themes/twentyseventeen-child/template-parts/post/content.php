<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

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
$post_content = get_the_content();
$post_duration = get_field('duration');
$post_cost = get_field('cost');
?>
<article class="event" id="event-<?= $post->post_name;?>">
	
	<h2 class="event-title"><?php echo $post->post_title;?></h2>
	
	<div class="event-date">When: <span><?= $post_formatted_date;?></span></div>
	
	<?php if($post_start_time != '' && $post_end_time != ''){?>
	<div class="event-time">Time: <span><?= $post_start_time;?> to <?= $post_end_time;?></div>
	<?php }?>

	<?php if ($post_address != ''){?>
	<div class="event-address">Where: <span><?= $post_address;?></span></div>
	<?php } ?>

	<?php if ($post_duration != ''){ ?>
	<div class="event-duration">Duration: <span><?= $post_duration;?></span></div>
	<?php } ?>

	<?php if ($post_cost != ''){ ?>
	<div class="event-cost">Cost: <span><?= $post_cost;?></span></div>
	<?php } ?>

	<?php if ($post_content != ''){?>
	<div class="event-description">
		 
		<div class="description-body">
			<div class="heading-four">About this event</div>
			<?=$post_content?></div> 
		</div>
		
	</div>
	<?php } ?>

	<?php if ($post_eventbrite_id != ''){?>
	<div class="heading-four">You can book your tickets online now!</div>
	<div style="width:100%; text-align:left;"><iframe src="//eventbrite.com/tickets-external?eid=<?=$post_eventbrite_id;?>&ref=etckt" frameborder="0" height="275" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe><div style="font-family:Helvetica, Arial; font-size:12px; padding:10px 0 5px; margin:2px; width:100%; text-align:left;" ><a class="powered-by-eb" style="color: #ADB0B6; text-decoration: none;" target="_blank" href="http://www.eventbrite.com/">Powered by Eventbrite</a></div></div>
	<?php } ?>
</article>