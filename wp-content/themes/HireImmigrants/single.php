<?php get_header(); ?>
<ul class="breadcrumbs">
	<div class="container">
		<li><a href="#">Read</a></li>
		<li><a href="#">News</a></li>
		<li>10 simple tips why diversity is good for business</li>
	</div>
</ul>
<div class="container">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="single__article">
			<div class="article__image"><?php the_post_thumbnail(); ?></div>
			<span class="date"><?php the_date('F n, Y'); ?></span>
			<h1><?php the_title(); ?></h1>
			<div class="post__info">
				<div class="author">
					<!-- Author Name -->
					<span>Ryan Deska</span>
					<!-- Title -->
					<span>Guest Writer</span>
				</div>
				<span class="country">
					<img src="<?php echo get_template_directory_uri(); ?>/i/can.png" alt="">
					Canada
				</span>
			</div>
			<div class="article__content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
	<div class="article__share">
		<h4>Enjoyed the article? Share it with your colleagues to enjoy aswell</h4>
		<div class="social">
			<a href="#" class="social__twitter">
				<svg class="ico">
					<use xlink:href="#twitter"/>
				</svg>
				Twitter
			</a>
			<a href="#" class="social__linkedin">
				<svg class="ico">
					<use xlink:href="#linkedin"/>
				</svg>
				Linkedin
			</a>
			<a href="#" class="social__facebook">
				<svg class="ico">
					<use xlink:href="#facebook"/>
				</svg>
				Facebook
			</a>
		</div>
	</div>
	<div class="article__related">
		<h4>You might also like these articles</h4>
		<a href="#">
			<div class="post__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/i/filler-5.png')"></div>
			<span class="date">April 6, 2017</span>
			<span class="country"><img src="<?php echo get_template_directory_uri(); ?>/i/can.png" alt="">Canada</span>
			<h4>10 simple tips why diversity is good for business</h4>
		</a>
		<a href="#">
			<div class="post__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/i/filler-5.png')"></div>
			<span class="date">April 6, 2017</span>
			<span class="country"><img src="<?php echo get_template_directory_uri(); ?>/i/can.png" alt="">Canada</span>
			<h4>10 simple tips why diversity is good for business</h4>
		</a>
	</div>
</div>
<?php get_footer(); ?>