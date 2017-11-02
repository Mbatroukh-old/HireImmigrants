<?php get_header(); ?>
<ul class="breadcrumbs">
	<div class="container">
		<?php if(function_exists('bcn_display')){
		    bcn_display();
		}?>
	</div>
</ul>
<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="single__article single__article--video">
			<div class="article__image">
			<?php
				$videoLink = get_field('video_link');
				if($videoLink) { ?>
					<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
					<div class='embed-container'>
						<iframe src='<?php echo $videoLink; ?>' frameborder='0' allowfullscreen></iframe>
					</div>
				<?php } else { ?>
					<?php the_post_thumbnail(); ?>
				<?php }
			?>
			</div>
			<!-- If Webinars, then display date/start and end times, else display duration -->
			<?php $terms = get_the_terms( $post->ID , 'watch_categories' );
				$eventDate = get_field('event_date', false, false);
				$duration = get_field('duration');
				$registrationLink = get_field('registration_link');
				$organization = get_field('organization'); 
				foreach ( $terms as $term ) {
					if($term->name === 'Webinars'){
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
						<?php } ?>
						
					<?php } else { ?>
						<span class="date"><?php echo $duration; ?></span>
						<?php 
							$badge = get_field_object('badge');
							$value = $badge['value'];
							$label = $badge['choices'][ $value ];
							if($badge) { ?>
								<span class="<?php echo $value; ?>-badge badge"><?php echo $label; ?></span>
							<?php }
					}
				} ?>

			<h1><?php the_title(); ?></h1>

			<?php if($term->name === 'Employer Videos'){
				if($organization) { ?>
					<span class="organization"><?php echo $organization; ?></span>
				<?php }
			} else { ?> 
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
			<?php } ?>
			<div class="article__content">
				<?php the_content(); ?>
			</div>
			<!-- IF IN THE FUTURE THEN DISPLAY THIS BUTTON ELSE HIDE IT -->
			<?php if($term->name === 'Webinars'){
				if($registrationLink) { ?>
					<a href="<?php echo $registrationLink; ?>" target="_blank" class="btn btn-arrow purple register">
						Register
						<svg class="ico">
							<use xlink:href="#arrow"/>
						</svg>
					</a>
				<?php } 
			} ?>
		</div>
	<?php endwhile; endif; ?>
	<div class="article__share">
		<?php 
			$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$base_url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		?>
		<h4>Enjoyed the article? Share it with your colleagues to enjoy aswell</h4>
		<div class="social">
			<a href="http://twitter.com/home?status=<?php wp_title('-') ?>+<?php echo $actual_link; ?>" target="_blank" class="social__twitter">
				<svg class="ico">
					<use xlink:href="#twitter"/>
				</svg>
				Twitter
			</a>
			<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $actual_link; ?>&title=<?php wp_title('-') ?>&source=$base_url" target="_blank" class="social__linkedin">
				<svg class="ico">
					<use xlink:href="#linkedin"/>
				</svg>
				Linkedin
			</a>
			<a href="http://www.facebook.com/share.php?u=<?php echo $actual_link; ?>&title=<?php wp_title('-') ?>" target="_blank" alt="Share on Facebook" class="social__facebook">
				<svg class="ico">
					<use xlink:href="#facebook"/>
				</svg>
				Facebook
			</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>