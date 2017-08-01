<?php get_header(); ?>
<ul class="breadcrumbs">
	<div class="container">
		<li><a href="#">Read</a></li>
		<li>News</li>
	</div>
</ul>
<div class="page-header">
	<div class="container">
		<?php $pageTitle = single_term_title('', 0); ?>
		Some random html to break it up
		<?php if ($pageTitle === 'Webinars'){?>
			<h1>Webinars</h1>
			<span>Learning exchange</span>
		<?php } elseif ($pageTitle === 'Employer Videos') { ?>
			<h1>Employer Videos</h1>
			<span>Learn from employers</span>	
		<?php } else { ?>
			<h1>E-Learning</h1>
			<span>Videos for educators</span>
		<?php } ?>
	</div>
</div>
<div class="container">
	<div class="post__group post__group--videos">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_title(); ?>
			<?php echo "<br>"; ?>
		<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>