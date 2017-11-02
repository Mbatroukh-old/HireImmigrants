<?php
/* Template Name: Stories Page */
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
			<a href="/reports_category/employer-reports/" class="news">
				<svg class="ico">
					<use xlink:href="#employer-reports"/>
				</svg>
				Employer Reports
			</a>
			<a href="/reports_category/research-policy/" class="think">
				<svg class="ico">
					<use xlink:href="#research-policy"/>
				</svg>
				Research &amp; Policy
			</a>
		</div>
	</div>
</div>
<div class="container">
	<!-- Why Hire SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">Employer Reports</span>
			<span class="catgroup__subtitle">Guides for success</span>
		</div>
		<div class="post__group">
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'reports',
			    'posts_per_page' => 3,
			    'tax_query' => array(
			        array (
			            'taxonomy' => 'reports_category',
			            'field' => 'slug',
			            'terms' => 'employer-reports',
			        )
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>
				<div class="post">
					<a href="<?php the_permalink(); ?>">
						<div class="post__image" style='background-image: url("<?php the_post_thumbnail_url(); ?>")'></div>
					</a>
					<span class="date"><?php echo get_the_date($format, $post_id); ?></span>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php 
						$organization = get_field('organization');
						if($organization) { ?>
							<span class="organization"><?php echo $organization; ?></span>
					<?php } ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>
		</div>
		<a href="/reports_category/employer-reports/" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
	<!-- Recruit and Select SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">Research &amp; Policy</span>
			<span class="catgroup__subtitle">Latest in immigration analysis</span>
		</div>
		<div class="post__group">
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'reports',
			    'posts_per_page' => 3,
			    'tax_query' => array(
			        array (
			            'taxonomy' => 'reports_category',
			            'field' => 'slug',
			            'terms' => 'research-policy',
			        )
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>
				<div class="post">
					<a href="<?php the_permalink(); ?>">
						<div class="post__image" style='background-image: url("<?php the_post_thumbnail_url(); ?>")'></div>
					</a>
					<span class="date"><?php echo get_the_date($format, $post_id); ?></span>
					<?php $badge = get_field_object('badge');
					$value = $badge['value'];
					$label = $badge['choices'][ $value ];
					if($badge) { ?>
						<span class="<?php echo $value; ?>-badge badge"><?php echo $label; ?></span>
					<?php } ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php 
						$organization = get_field('organization');
						if($organization) { ?>
							<span class="organization"><?php echo $organization; ?></span>
					<?php } ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>
		</div>
		<a href="/reports_category/research-policy/" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
</div>
<?php get_footer(); ?>