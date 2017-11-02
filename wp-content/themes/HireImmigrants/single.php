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
		<div class="single__article">
			<div class="article__image"><?php the_post_thumbnail(); ?></div>
			<span class="date"><?php echo get_the_date($format, $post_id); ?></span>
			<h1><?php the_title(); ?></h1>
			<div class="post__info">
				<div class="author">
					<!-- Author Name -->
					<span><?php echo get_field('author'); ?></span>
					<!-- Title -->
					<span><?php echo get_field('author_role'); ?></span>
				</div>
				<?php $country = get_field_object('country');
				$value = $country['value'];
				$label = $country['choices'][ $value ]; ?>
				<span class="country flag-icon flag-icon-<?php echo $value; ?>"><?php echo $label; ?></span>
			</div>
			<div class="article__content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; endif; ?>
	<div class="article__share">
		<?php 
			$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$base_url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
		?>
		<h4>Enjoyed the article? Share it with your colleagues to enjoy aswell</h4>
		<div class="social">
			<a href="http://twitter.com/home?status=<?php wp_title('-') ?>+<?php echo $actual_link; ?>" class="social__twitter">
				<svg class="ico">
					<use xlink:href="#twitter"/>
				</svg>
				Twitter
			</a>
			<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $actual_link; ?>&title=<?php wp_title('-') ?>&source=$base_url" class="social__linkedin">
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
	<div class="article__related">
		<h4>You might also like these articles</h4>
		<a href="#">
			<div class="post__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/i/filler-5.png')"></div>
			<span class="date">April 6, 2017</span>
			<span class="country"><img src="<?php echo get_template_directory_uri(); ?>/i/can.png" alt="">Canada</span>
			<span class="title">10 simple tips why diversity is good for business</span>
		</a>
		<a href="#">
			<div class="post__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/i/filler-5.png')"></div>
			<span class="date">April 6, 2017</span>
			<span class="tag">Hire</span>
			<span class="title">10 simple tips why diversity is good for business</span>
		</a>
	</div>
</div>
<?php get_footer(); ?>