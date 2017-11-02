<?php get_header(); ?>
<ul class="breadcrumbs">
	<div class="container">
		<?php if(function_exists('bcn_display')){
		    bcn_display();
		}?>
	</div>
</ul>
<div class="page-header">
	<div class="container">
		<?php $pageTitle = single_term_title('', 0); ?>
		<?php if ($pageTitle === 'Webinars'){?>
			<h1>Webinars</h1>
			<span>Learning exchange</span>
		<?php } elseif ($pageTitle === 'Employer Videos') { ?>
			<h1>Employer Videos</h1>
			<span>Learn from employers</span>
			<div class="badges">
				<span class="all-badge badge">All</span>
				<span class="hire-badge badge">Hire</span>
				<span class="diversity-badge badge">Diversity &amp; Inclusion</span>
				<span class="ideas-badge badge">Ideas</span>
				<span class="innovation-badge badge">Innovation</span>
				<span class="immigration-badge badge">Immigration</span>
			</div>
		<?php } else { ?>
			<h1>E-Learning</h1>
			<span>Videos for educators</span>
			<div class="badges">
				<span class="all-badge badge">All</span>
				<span class="hire-badge badge">Hire</span>
				<span class="diversity-badge badge">Diversity &amp; Inclusion</span>
				<span class="ideas-badge badge">Ideas</span>
				<span class="innovation-badge badge">Innovation</span>
				<span class="immigration-badge badge">Immigration</span>
			</div>
		<?php } ?>        
	</div>
</div>
<div class="catgroup">
	<div class="container">
		<div class="post__group post__group--videos">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				$badge = get_field_object('badge');
				$value = $badge['value'];
				$label = $badge['choices'][ $value ]; ?>
				<div class="post <?php echo $value; ?>">
					<a href="<?php the_permalink(); ?>">
						<div class="post__image" style='background-image: url("<?php the_post_thumbnail_url(); ?>")'>
							<?php 
								$videoLink = get_field('video_link');
								if($videoLink) { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/i/play.png">
								<?php }
							?>
						</div>
					</a>
					<!-- Checks if post taxonomy is Webinar, if it is then displays the start and end time of event, if not then displays duration and badge-->
						<?php if($term == 'webinars') {
							$eventDate = get_field('event_date', false, false);
							$duration = get_field('duration');
							$registrationLink = get_field('registration_link');
							if($eventDate) { ?>
								<span class="date">
									<?php echo $eventDate; ?> | 
									<?php if($duration) {
										echo $duration;
									} else {
										echo the_field('start_time');
										echo ' - ';
										echo the_field('end_time');
										echo ' EST';
									} ?>
								</span>
							<?php }
						?>
						<?php } else { ?>
							<span class="date"><?php the_field('duration'); ?></span>
							<?php 
								if($badge) { ?>
									<span class="<?php echo $value; ?>-badge badge"><?php echo $label; ?></span>
								<?php } 
						} ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php if($term == 'webinars') { ?>
						<div class="speakers">
							<?php 
							$registrationLink = get_field('registration_link');
							$postspeaker = get_field('speakers');
							if( $postspeaker ): ?>
							    <?php foreach( $postspeaker as $post): // variable must be called $post (IMPORTANT) ?>
							        <?php setup_postdata($post); ?>

							        <div class="speaker">
										<?php the_post_thumbnail(); ?>
										<div class="speaker__info">
											<span class="name"><?php the_title(); ?></span>
											<div class="speaker__organization"><?php the_field('where_does_this_speaker_work'); ?></div>
										</div>
									</div>
							    <?php endforeach;
							    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							<?php endif; ?>
						</div>
						<?php 
							if($registrationLink) { ?>
								<a href="<?php echo $registrationLink; ?>" target="_blank" class="btn btn-arrow purple register">
									Register
									<svg class="ico">
										<use xlink:href="#arrow"/>
									</svg>
								</a>
							<?php } 
						?>
					<?php } else { 
						$organization = get_field('organization'); 

						if($organization) { ?>
							<span class="organization"><?php echo $organization; ?></span>
						<?php }
					} ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>