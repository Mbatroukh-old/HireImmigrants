<?php
/* Template Name: Watch Page */
get_header(); ?>
<ul class="breadcrumbs">
	<div class="container">
		<?php if(function_exists('bcn_display')){
		    bcn_display();
		}?>
	</div>
</ul>
<div class="subcats">
	<div class="container">
		<div class="subcats__wrap">
			<a href="/watch_categories/webinars/" class="news">
				<svg class="ico">
					<use xlink:href="#webinars"/>
				</svg>
				Webinars
			</a>
			<a href="/watch_categories/employer-videos/" class="think">
				<svg class="ico">
					<use xlink:href="#employer-videos"/>
				</svg>
				Employer Videos
			</a>
			<a href="/watch_categories/e-learning/" class="qna">
				<svg class="ico">
					<use xlink:href="#elearning"/>
				</svg>
				e-Learning
			</a>
		</div>
	</div>
</div>
<div class="container">
	<!-- WEBINARS SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">Webinars</span>
			<span class="catgroup__subtitle">Learning exchange</span>
		</div>
		<div class="post__group post__group--videos">
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'watch',
			    'posts_per_page' => 3,
			    'tax_query' => array(
			        array (
			            'taxonomy' => 'watch_categories',
			            'field' => 'slug',
			            'terms' => 'webinars',
			        )
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>
				<div class="post">
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
					<?php 
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
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="speakers">
						<?php 
						$posts = get_field('speakers');
						if( $posts ): ?>
						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>

						        <div class="speaker">
									<?php the_post_thumbnail(); ?>
									<div class="speaker__info">
										<span class="name"><?php the_title(); ?></span>
										<div class="speaker__organization"><?php the_field('where_does_this_speaker_work'); ?></div>
									</div>
								</div>
						    <?php endforeach; ?>
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>
					</div>
					<!-- IF IN THE FUTURE THEN DISPLAY THIS BUTTON ELSE HIDE IT -->
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
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>
		</div>
		<a href="/watch_categories/webinars/" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
	<!-- EMPLOYER VIDEOS SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">Employer Videos</span>
			<span class="catgroup__subtitle">Learn from employers</span>
		</div>
		<div class="post__group post__group--videos">
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'watch',
			    'posts_per_page' => 3,
			    'tax_query' => array(
			        array (
			            'taxonomy' => 'watch_categories',
			            'field' => 'slug',
			            'terms' => 'employer-videos',
			        )
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>
				<div class="post">
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
					<span class="date"><?php the_field('duration'); ?></span>
					<?php 
						$badge = get_field_object('badge');
						$value = $badge['value'];
						$label = $badge['choices'][ $value ];
						$organization = get_field('organization');
						if($badge) { ?>
							<span class="<?php echo $value; ?>-badge badge"><?php echo $label; ?></span>
						<?php } ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php if($organization) { ?>
						<span class="organization"><?php echo $organization; ?></span>
					<?php } ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>
		</div>
		<a href="/watch_categories/employer-videos/" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
	<!-- E-LEARNING SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">E-Learning</span>
			<span class="catgroup__subtitle">Learn from the best</span>
		</div>
		<div class="post__group post__group--videos">
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'watch',
			    'posts_per_page' => 3,
			    'tax_query' => array(
			        array (
			            'taxonomy' => 'watch_categories',
			            'field' => 'slug',
			            'terms' => 'e-learning',
			        )
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>
				<div class="post">
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
					<span class="date"><?php the_field('duration'); ?></span>
					<?php 
						$badge = get_field_object('badge');
						$value = $badge['value'];
						$label = $badge['choices'][ $value ];
						$organization = get_field('organization');
						if($badge) { ?>
							<span class="<?php echo $value; ?>-badge badge"><?php echo $label; ?></span>
						<?php } ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<span class="organization"><?php the_field('organization'); ?></span>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>
		</div>
		<a href="/watch_categories/e-learning/" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
</div>
<?php get_footer(); ?>