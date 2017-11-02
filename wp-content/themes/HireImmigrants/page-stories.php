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
			<a href="/story/why-hire/" class="news">
				<svg class="ico">
					<use xlink:href="#why-hire"/>
				</svg>
				Why Hire
			</a>
			<a href="/story/recruit-select/" class="think">
				<svg class="ico">
					<use xlink:href="#recruit-select"/>
				</svg>
				Recruit &amp; Sales
			</a>
			<a href="/story/diversity-at-work/" class="qna">
				<svg class="ico">
					<use xlink:href="#diversity-at-work"/>
				</svg>
				Diversity at Work
			</a>
			<a href="/story/employer-champions/" class="qna">
				<svg class="ico">
					<use xlink:href="#employer-champions"/>
				</svg>
				Employer Champions
			</a>
		</div>
	</div>
</div>
<div class="container">
	<!-- Why Hire SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">Why Hire</span>
			<span class="catgroup__subtitle">The business case</span>
		</div>
		<div class="post__group">
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'stories',
			    'posts_per_page' => 3,
			    'tax_query' => array(
			        array (
			            'taxonomy' => 'story',
			            'field' => 'slug',
			            'terms' => 'why-hire',
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
					<?php
						$country = get_field_object('country');
						$value = $country['value'];
						$label = $country['choices'][ $value ];
						$organization = get_field('organization');
					?>
					<span class="country flag-icon flag-icon-<?php echo $value; ?>"><?php echo $label; ?></span>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php if($organization) { ?>
						<span class="organization"><?php echo $organization; ?></span>
					<?php } ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>
		</div>
		<a href="/story/why-hire/" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
	<!-- Recruit and Select SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">Recruit &amp; Select</span>
			<span class="catgroup__subtitle">Innovative approaches</span>
		</div>
		<div class="post__group">
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'stories',
			    'posts_per_page' => 3,
			    'tax_query' => array(
			        array (
			            'taxonomy' => 'story',
			            'field' => 'slug',
			            'terms' => 'recruit-select',
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
					<?php
						$country = get_field_object('country');
						$value = $country['value'];
						$label = $country['choices'][ $value ];
						$organization = get_field('organization');
					?>
					<span class="country flag-icon flag-icon-<?php echo $value; ?>"><?php echo $label; ?></span>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php if($organization) { ?>
						<span class="organization"><?php echo $organization; ?></span>
					<?php } ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>
		</div>
		<a href="/story/recruit-select/" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
	<!-- Diversity at Work SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">Diversity at Work</span>
			<span class="catgroup__subtitle">Building inclusing workforce</span>
		</div>
		<div class="post__group">
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'stories',
			    'posts_per_page' => 3,
			    'tax_query' => array(
			        array (
			            'taxonomy' => 'story',
			            'field' => 'slug',
			            'terms' => 'diversity-at-work',
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
					<?php
						$country = get_field_object('country');
						$value = $country['value'];
						$label = $country['choices'][ $value ];
						$organization = get_field('organization');
					?>
					<span class="country flag-icon flag-icon-<?php echo $value; ?>"><?php echo $label; ?></span>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php if($organization) { ?>
						<span class="organization"><?php echo $organization; ?></span>
					<?php } ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>
		</div>
		<a href="/story/diversity-at-work/" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
	<!-- Employer Champions SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">Employer Champions</span>
			<span class="catgroup__subtitle">Corporate Leaders</span>
		</div>
		<div class="post__group post__group--employee-champions">
			<?php $the_query = new WP_Query( array(
			    'post_type' => 'stories',
			    'posts_per_page' => 3,
			    'tax_query' => array(
			        array (
			            'taxonomy' => 'story',
			            'field' => 'slug',
			            'terms' => 'employer-champions',
			        )
			    ),
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post(); ?>
				<div class="post">
					<a href="<?php the_permalink(); ?>">
						<div class="post__image">
							<?php the_post_thumbnail(); ?>
						</div>
					</a>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php
						$country = get_field_object('country');
						$value = $country['value'];
						$label = $country['choices'][ $value ];
					?>
					<span class="country flag-icon flag-icon-<?php echo $value; ?>"><?php echo $label; ?></span>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata();?>
		</div>
		<a href="/story/employer-champions/" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
</div>
<?php get_footer(); ?>