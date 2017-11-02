<?php
/* Template Name: Contact Page */
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="contact-page">
		<div class="container">
			<div class="left">
				<?php the_content(); ?>
			</div>
			<div class="right">
				<?php echo do_shortcode('[contact-form-7 id="96" title="Contact form 1"]') ?>
			</div>
		</div>	
	</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>