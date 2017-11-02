<?php 
/* Template Name: Homepage */
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="home-banner">
	<?php 
	$post_object = get_field('featured_post');
	if( $post_object ): 

		// override $post
		$post = $post_object;
		setup_postdata( $post ); 

		?>
	    <?php the_post_thumbnail(); ?>
			<div class="overlay">
				<div class="container">
					<!-- <span>Think</span> -->
					<?php 
					$badge = get_field_object('badge');
					$value = $badge['value'];
					$label = $badge['choices'][ $value ];
					if($badge) { ?>
						<span class="<?php echo $value; ?>-badge badge"><?php echo $label; ?></span>
					<?php } ?>
					<h1><?php the_title(); ?></h1>
					<a href="<?php the_permalink(); ?>" class="btn btn-arrow purple">
						Read post
						<svg class="ico">
							<use xlink:href="#arrow"/>
						</svg>
					</a>
				</div>
			</div>	
	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>
</div>
<div class="spotlights">
	<div class="container-w">
		<div class="spotlight-wrap">
			<div class="spotlight">
				<span>About Us</span>
				<h6>We help employers and immigrants work better together</h6>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
				<a href="#" class="btn btn-arrow purple">
					Learn more
					<svg class="ico">
						<use xlink:href="#arrow"/>
					</svg>
				</a>
			</div>
			<div class="spotlight">
				<span>Subscribe to our newsletter</span>
				<h6>Get the latest in immigrant employment<br>resources and best practices</h6>
				<!-- <p></p> -->
				<?php echo do_shortcode('[ctct form="184"]'); ?>
				<!-- <form>
					<input type="text" placeholder="Email Address">
					<button class="btn purple" type="submit">
						Subscribe
						<svg class="ico">
							<use xlink:href="#envelope"/>
						</svg>
					</button>
				</form> -->
			</div>
		</div>
	</div>
</div>
<div class="category-wrap">
	<div class="container">
		<h2>What are you looking for today?</h2>
		<div class="category-grid">
			<!-- <div class="category-row"> -->
				<a href="/watch_categories/webinars/">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#webinars"/>
						</svg>
						<span>Webinars</span>
					</div>
				</a>
				<a href="/reports_category/research-policy/">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#policy"/>
						</svg>
						<span>Policy</span>
					</div>
				</a>
				<a href="/reports_category/employer-reports/">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#employer-reports"/>
						</svg>
						<span>Reports</span>
					</div>
				</a>
			<!-- </div>
			<div class="category-row"> -->
				<a href="/read/news/">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#news"/>
						</svg>
						<span>News</span>
					</div>
				</a>
				<a href="/stories/">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#stories"/>
						</svg>
						<span>Stories</span>
					</div>
				</a>
				<a href="/read/announcements/">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#announcements"/>
						</svg>
						<span>Announcements</span>
					</div>
				</a>
			<!-- </div> -->
				</div>
		</div>
</div>
<div class="explore-wrap">
	<div class="container">
		<div class="explore-highlights">
			<div class="row">
				<div class="block ">
					<h6><?php the_field('p-title'); ?></h6>
					<p><?php the_field('p-content'); ?></p>
					<a href="<?php the_field('p-url'); ?>" class="btn btn-arrow">
						<?php the_field('p-link_text'); ?>
						<svg class="ico">
							<use xlink:href="#arrow"/>
						</svg>
					</a>
				</div>
				<div class="block">
					<h6><?php the_field('b-title'); ?></h6>
					<p><?php the_field('b-content'); ?></p>
					<a href="<?php the_field('b-url'); ?>" class="btn btn-arrow">
						<?php the_field('b-link_text'); ?>
						<svg class="ico">
							<use xlink:href="#arrow"/>
						</svg>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="block">
					<div class="block__group">
						<h6><?php the_field('y-title'); ?></h6>
						<p><?php the_field('y-content'); ?></p>
					</div>
					<a href="<?php the_field('y-url'); ?>" class="btn btn-arrow">
						<?php the_field('y-link_text'); ?>
						<svg class="ico">
							<use xlink:href="#arrow"/>
						</svg>
					</a>
					<?php
						$powered = get_field('powered_by_magnet');
						if($powered) { ?>
							<span class="powered-by">
								Powered by
								<img src="<?php echo get_template_directory_uri(); ?>/i/magnet-logo.png" alt="">
								<img src="<?php echo get_template_directory_uri(); ?>/i/magnet-text.png" alt="">
							</span>		
						<?php }
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="founding-funded-sister">
	<div class="container-w">
		<div class="tab-row">
			<button class="active" id="founding">Our Founding Partners</button>
			<button id="funded">Funded by</button>
			<button id="sister">Sister Sites</button>
		</div>
		<div class="logo-row visible founding">
			<img src="<?php echo get_template_directory_uri(); ?>/i/GDX.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/Maytree.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/McConnell.png" alt="">
		</div>
		<div class="logo-row funded">
			<img src="<?php echo get_template_directory_uri(); ?>/i/RBC.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/ontario.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/TRSM.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/RU.png" alt="">
		</div>
		<div class="logo-row sister">
			<img src="<?php echo get_template_directory_uri(); ?>/i/magnet.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/CoM.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/GDX.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/DOB.png" alt="">
		</div>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>