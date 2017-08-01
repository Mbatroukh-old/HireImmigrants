<?php get_header(); ?>
<ul class="breadcrumbs">
	<div class="container">
		<li><a href="#">Read</a></li>
		<li><a href="#">Watch</a></li>
		<li>10 simple tips why diversity is good for business</li>
	</div>
</ul>
<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="single__article single__article--video">
			<div class="article__image"><?php the_post_thumbnail(); ?></div>
			<!-- If Webinars, then display date/start and end times, else display duration -->
			<?php $terms = get_the_terms( $post->ID , 'watch' );
				foreach ( $terms as $term ) {
					if($term->name === 'Webinars'){?>
						<span class="date"><?php the_field('date_of_webinar'); ?> &nbsp;|&nbsp; <?php the_field('webinar_start_time'); ?> - <?php the_field('webinar_end_time'); ?> EST</span>
					<?php } else { ?>
						<span class="date"><?php the_field('duration_of_video'); ?></span>
					<?php }
				} ?>
			<h1><?php the_title(); ?></h1>
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
								<div class="speaker__organization"><?php the_field('company'); ?></div>
							</div>
						</div>
				    <?php endforeach; ?>
				    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
				<?php endif; ?>
			</div>
			<div class="article__content">
				<?php the_content(); ?>
			</div>
			<!-- IF IN THE FUTURE THEN DISPLAY THIS BUTTON ELSE HIDE IT -->
			<?php if($term->name === 'Webinars'){?>
				<a href="<?php the_field('registration_link'); ?>" class="btn btn-arrow purple" target="_blank">
					Register
					<svg class="ico">
						<use xlink:href="#arrow"/>
					</svg>
				</a>
			<?php } ?>
		</div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>