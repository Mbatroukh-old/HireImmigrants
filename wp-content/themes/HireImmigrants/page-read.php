<?php
/* Template Name: Read Page */
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
			<a href="/read/news" class="news">
				<svg class="ico">
					<use xlink:href="#news"/>
				</svg>
				News
			</a>
			<a href="/read/think" class="think">
				<svg class="ico">
					<use xlink:href="#think"/>
				</svg>
				Think
			</a>
			<a href="/read/qa" class="qna">
				<svg class="ico">
					<use xlink:href="#qna"/>
				</svg>
				Q&amp;A
			</a>
			<a href="/read/announcements"  class="announcements">
				<svg class="ico">
					<use xlink:href="#announcements"/>
				</svg>
				Announcements
			</a>
		</div>
	</div>
</div>
<div class="container">
	<!-- NEWS SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">News</span>
			<span class="catgroup__subtitle">In the news</span>
		</div>
		<div class="post__group">

			<?php
				$args = array(
				    // Arguments for your query.
				    "category_name" => "news",
				    'posts_per_page' => 3
				);
				// Custom query.
				$query = new WP_Query( $args );
				 
				// Check that we have query results.
				if ( $query->have_posts() ) {
				 
				    // Start looping over the query results.
				    while ( $query->have_posts() ) {
				 
				        $query->the_post();
				        $country = get_field_object('country');
						$value = $country['value'];
						$label = $country['choices'][ $value ];
						$bgimg = has_post_thumbnail(); ?>
				        <div class="post">
							<a href="<?php the_permalink(); ?>">
								<div class="post__image" style='background-image: url("<?php if($bgimg){the_post_thumbnail_url();} else { echo get_template_directory_uri(); ?>/i/fallback.jpg<?php } ?>")'>
								</div>
							</a>
							<span class="date"><?php echo get_the_date($format, $post_id); ?></span>
							<span class="country flag-icon flag-icon-<?php echo $value; ?>"><?php echo $label; ?></span>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p><?php the_excerpt(); ?></p>
						</div>
				 
				    <?php }
				 
				}
				 
				// Restore original post data.
				wp_reset_postdata();
			 
			?>
		<a href="/read/news" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
	</div>
	<!-- THINK SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">Think</span>
			<span class="catgroup__subtitle">Global thought leadership</span>
		</div>
		<div class="post__group">

			<?php
				$args = array(
				    // Arguments for your query.
				    "category_name" => "think",
				    'posts_per_page' => 3
				);
				 
				// Custom query.
				$query = new WP_Query( $args );
				 
				// Check that we have query results.
				if ( $query->have_posts() ) {
				 
				    // Start looping over the query results.
				    while ( $query->have_posts() ) {
				 
				        $query->the_post();
				        $bgimg = has_post_thumbnail(); ?>
				 
				        <div class="post">
							<a href="<?php the_permalink(); ?>">
								<div class="post__image" style='background-image: url("<?php if($bgimg){the_post_thumbnail_url();} else { echo get_template_directory_uri(); ?>/i/fallback.jpg<?php } ?>")'>
								</div>
							</a>
							<span class="date"><?php echo get_the_date($format, $post_id); ?></span>
							<?php $badge = get_field_object('badge');
							$bValue = $badge['value'];
							$bLabel = $badge['choices'][ $bValue ]; ?>
							<span class="<?php echo $bValue; ?>-badge badge"><?php echo $bLabel; ?></span>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p><?php the_excerpt(); ?></p>
						</div>
				 
				    <?php }
				 
				}
				// Restore original post data.
				wp_reset_postdata();
			?>
		</div>
		<a href="/read/think" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
	<!-- Q and A SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">Q&amp;A</span>
			<span class="catgroup__subtitle">Your questions answered</span>
		</div>
		<div class="post__group">
			<?php
				$args = array(
				    // Arguments for your query.
				    "category_name" => "qa",
				    'posts_per_page' => 3
				);
				 
				// Custom query.
				$query = new WP_Query( $args );
				 
				// Check that we have query results.
				if ( $query->have_posts() ) {
				 
				    // Start looping over the query results.
				    while ( $query->have_posts() ) {
				 
				        $query->the_post();
				        $bgimg = has_post_thumbnail(); ?>
				 
				        <div class="post">
							<a href="<?php the_permalink(); ?>"><div class="post__image" style='background-image: url("<?php if($bgimg){the_post_thumbnail_url();} else { echo get_template_directory_uri(); ?>/i/fallback.jpg<?php } ?>")'></div></a>
							<span class="date"><?php echo get_the_date($format, $post_id); ?></span>
							<?php $country = get_field_object('country');
							$value = $country['value'];
							$label = $country['choices'][ $value ]; ?>
							<span class="country flag-icon flag-icon-<?php echo $value; ?>"><?php echo $label; ?></span>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<p><?php the_excerpt(); ?></p>
						</div>
				 
				    <?php }
				 
				}
				// Restore original post data.
				wp_reset_postdata();
			?>
		</div>
		<a href="/read/qa" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
	<!-- ANNOUNCMENTS SECTION -->
	<div class="catgroup">
		<div class="catgroup__titles">
			<span class="catgroup__title">Announcments</span>
			<span class="catgroup__subtitle">The latest from Hire Immigrants</span>
		</div>
		<div class="catgroup__list">
			<?php
				$args = array(
				    // Arguments for your query.
				    "category_name" => "announcements",
				    'posts_per_page' => 2
				);
				 
				// Custom query.
				$query = new WP_Query( $args );
				 
				// Check that we have query results.
				if ( $query->have_posts() ) {
				 
				    // Start looping over the query results.
				    while ( $query->have_posts() ) {
				 
				        $query->the_post();
				        $bgimg = has_post_thumbnail(); ?>

				        <div class="post--list">
							<span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
							<a href="<?php the_permalink(); ?>"><div class="post__image--list" style='background-image: url("<?php if($bgimg){the_post_thumbnail_url();} else { echo get_template_directory_uri(); ?>/i/fallback.jpg<?php } ?>")'></div></a>
						</div>

				    <?php }
				 
				}
				// Restore original post data.
				wp_reset_postdata();
			?>
		</div>
		<a href="/read/announcements" class="btn btn-arrow purple">
			View All
			<svg class="ico">
				<use xlink:href="#arrow"/>
			</svg>
		</a>
	</div>
	</div>
</div>
<?php get_footer(); ?>