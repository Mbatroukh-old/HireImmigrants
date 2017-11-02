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
		<div class="single__article single__article--reports">
			<div class="article__image">
				<?php the_post_thumbnail(); ?>
			</div>
			<span class="date"><?php echo get_the_date($format, $post_id); ?></span>
			<h1><?php the_title(); ?></h1>
			<div class="post__info">
				<?php 
					$author = get_field('author');
					if($author) { ?>
						<div class="author">
							<span><?php echo get_field('author'); ?></span>
							<span><?php echo get_field('author_role'); ?></span>
						</div>
					<?php }
				$organization = get_field('organization'); 

				if($organization) { ?>
					<span class="organization"><?php echo $organization; ?></span>
				<?php } ?>
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