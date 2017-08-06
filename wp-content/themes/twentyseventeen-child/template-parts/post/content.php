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
		<!-- 
		<div class="description-body">
			<div class="heading-four">About this event</div>
			<?=$post_content?></div> 
		</div>
		-->

		<div class="description-body">
			<div class="heading-four">About this event</div>
			<p>What is your dream? Will you achieve it in your lifetime? I'm certain that you desire to. I'm sure you hope you will. What odds would you give yourself? One in five? One in a hundred? One in a million? How can you tell whether your chances are good or whether your dream will always remain exactly that, a dream? The more work you do to test your dream and to prepare before actually launching out to accomplish it, the greater the chance you will actually see your dream come true.</p>

			<p class="end-p">Whether you have lost sight of an old dream or you are searching for a new one within you, this Put Your Dream to the Test Mastermind Group Study provides a step by step action plan that you can start using today to see, own and reach your dream. John C. Maxwell draws on his forty years of mentoring experience in this book to expertly guide you through the ten questions required of every successful dreamer.</p>
			<div class="heading-four">Watch the video below for more info:</div>
			<iframe style="width:100%;height:440px;" src="https://www.youtube.com/embed/q7Y5Z700DrA" frameborder="0" allowfullscreen></iframe>
			<br>
			
			<p class="end-p">Certificates will be provided at the end of the 5th session.
			If you are not satisfied with this Mastermind Group Study after attending the first session, you can get 100% of your money back, without any questions asked. Put your dreams to the test risk-free.</p>
			
			<div class="heading-four">Mastermind Group Study</div>
			<p class="end-p">There is synergy of energy, commitment and excitement that participants bring to a Mastermind Group. This group is facilitated by Jade Jalali (certified John Maxwell Team member), and it offers a combination of masterminding, peer brainstorming, education, accountability and support in a group setting to sharpen your business and personal skills. By bringing fresh ideas and a different perspective, this Mastermind Group can help you achieve success.</p>
			<div class="heading-four">Key Benefits of a Mastermind Group:</div>
			<ul>
				<li>Increase your own experience and confidence</li>
				<li>Sharpen your business and personal skills</li>
				<li>Add an instant and valuable support network</li>
				<li>Get honest feedback, advice and brainstorming</li>
				<li>Borrow on the experience and skills of the other members</li>
				<li>Study in a group setting, create an action plan and have the group hold you accountable to fulfilling your plan and goals</li>
				<li>Receive critical insights into yourself</li>
				<li>Optimistic peer support in maintaining a positive mental attitude</li>
				<li>A sense of shared endeavour – there are others out there</li>
			</ul>
		</div>
	</div>
	<?php } ?>

	<?php if ($post_eventbrite_id != ''){?>
	<div class="heading-four">You can book your tickets online now!</div>
	<div style="width:100%; text-align:left;"><iframe src="//eventbrite.com/tickets-external?eid=<?=$post_eventbrite_id;?>&ref=etckt" frameborder="0" height="275" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe><div style="font-family:Helvetica, Arial; font-size:12px; padding:10px 0 5px; margin:2px; width:100%; text-align:left;" ><a class="powered-by-eb" style="color: #ADB0B6; text-decoration: none;" target="_blank" href="http://www.eventbrite.com/">Powered by Eventbrite</a></div></div>
	<?php } ?>
</article>