<?php
/* Template Name: News Page. (Child of Read) */
get_header(); ?>
<ul class="breadcrumbs">
	<div class="container">
		<li><a href="#">Read</a></li>
		<li>News</li>
	</div>
</ul>
<div class="page-header">
	<div class="container">
		<?php /* if(function_exists('bcn_display')) { bcn_display(); } */ ?>
		<!-- <br> -->
		<!-- <ul>
			<li><a href="/"><?php /* render_icon('home'); */ ?><?php /* _e('Home'); */ ?></a></li>
			<?php /* if ( is_singular('post') ): */ ?>
				<li><a href="/news/"><?php /* render_icon('chevron-right'); */ ?>/<?php /* _e('News'); */ ?></a></li>
			<?php /* else: */ ?>
				<li><?php /* render_icon('chevron-right'); */ ?>/<?php /* the_title(); */ ?></li>
			<?php /* endif; */ ?>
		</ul> -->
		<!-- <br> -->
		<h1>News</h1>
		<span>In the news</span>
	</div>
</div>
<div class="container">
	<div class="catgroup">
		<div class="post__group">
			<a href="#">
				<div class="post__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/i/filler-5.png')"></div>
				<span class="date">April 6, 2017</span>
				<span class="country"><img src="<?php echo get_template_directory_uri(); ?>/i/can.png" alt="">Canada</span>
				<h4>10 simple tips why diversity is good for business</h4>
				<p>We cannot concieve of a thought divorced from brainwaves. a statments which remains a mere</p>
			</a>
			<a href="#">
				<div class="post__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/i/filler-5.png')"></div>
				<span class="date">April 6, 2017</span>
				<span class="country"><img src="<?php echo get_template_directory_uri(); ?>/i/can.png" alt="">Canada</span>
				<h4>10 simple tips why diversity is good for business</h4>
				<p>We cannot concieve of a thought divorced from brainwaves. a statments which remains a mere</p>
			</a>
			<a href="#">
				<div class="post__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/i/filler-5.png')"></div>
				<span class="date">April 6, 2017</span>
				<span class="country"><img src="<?php echo get_template_directory_uri(); ?>/i/can.png" alt="">Canada</span>
				<h4>10 simple tips why diversity is good for business</h4>
				<p>We cannot concieve of a thought divorced from brainwaves. a statments which remains a mere</p>
			</a>
			<a href="#">
				<div class="post__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/i/filler-5.png')"></div>
				<span class="date">April 6, 2017</span>
				<span class="country"><img src="<?php echo get_template_directory_uri(); ?>/i/can.png" alt="">Canada</span>
				<h4>10 simple tips why diversity is good for business</h4>
				<p>We cannot concieve of a thought divorced from brainwaves. a statments which remains a mere</p>
			</a>
			<a href="#">
				<div class="post__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/i/filler-5.png')"></div>
				<span class="date">April 6, 2017</span>
				<span class="country"><img src="<?php echo get_template_directory_uri(); ?>/i/can.png" alt="">Canada</span>
				<h4>10 simple tips why diversity is good for business</h4>
				<p>We cannot concieve of a thought divorced from brainwaves. a statments which remains a mere</p>
			</a>
			<a href="#">
				<div class="post__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/i/filler-5.png')"></div>
				<span class="date">April 6, 2017</span>
				<span class="country"><img src="<?php echo get_template_directory_uri(); ?>/i/can.png" alt="">Canada</span>
				<h4>10 simple tips why diversity is good for business</h4>
				<p>We cannot concieve of a thought divorced from brainwaves. a statments which remains a mere</p>
			</a>
			<a href="#">
				<div class="post__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/i/filler-5.png')"></div>
				<span class="date">April 6, 2017</span>
				<span class="country"><img src="<?php echo get_template_directory_uri(); ?>/i/can.png" alt="">Canada</span>
				<h4>10 simple tips why diversity is good for business</h4>
				<p>We cannot concieve of a thought divorced from brainwaves. a statments which remains a mere</p>
			</a>
		</div>
		Pagination goes here
	</div>
</div>
<?php get_footer(); ?>