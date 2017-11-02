<?php get_header(); ?>
<ul class="breadcrumbs">
	<div class="container">
		<?php if(function_exists('bcn_display')){
		    bcn_display();
		}?>
	</div>
</ul>
<div class="page-header">
	<div class="container">
		<h1><?php single_cat_title(); ?></h1>
		<?php $catTitle = single_cat_title("", false); ?>
		<?php if($catTitle === "News") { ?>
			<span>In the news</span>
		<?php } else if($catTitle === "Think") { ?>
			<span>Global thought leadership</span>
			<div class="badges">
				<span class="all-badge badge">All</span>
				<span class="hire-badge badge">Hire</span>
				<span class="diversity-badge badge">Diversity &amp; Inclusion</span>
				<span class="ideas-badge badge">Ideas</span>
				<span class="innovation-badge badge">Innovation</span>
				<span class="immigration-badge badge">Immigration</span>
			</div>
		<?php } else if($catTitle === "Q&A") { ?>
			<span>Your questions answered</span>
		<?php } else { ?>
			<span>The latest from Hire Immigrants</span>
		<?php } ?>
	</div>
</div>
<div class="container">
	<div class="catgroup">
		<div class="post__group <?php if($catTitle === 'Announcements') { echo 'announcement-post';} ?>">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php if($catTitle === "Think") {
					$badge = get_field_object('badge');
					$bValue = $badge['value'];
					$bLabel = $badge['choices'][ $bValue ]; 
				} ?>
				<?php if($catTitle === 'Announcements') { ?>
					<div class="post">
						<span><?php the_title(); ?></span>
						<?php the_post_thumbnail(); ?>
					</div>
				<?php } else { ?>
					<div class="post <?php echo $bValue; ?>">
						<a href="<?php the_permalink(); ?>"><div class="post__image" style='background-image: url("<?php the_post_thumbnail_url(); ?>")'></div></a>
						<span class="date"><?php echo get_the_date($format, $post_id); ?></span>
						<?php if($catTitle === "Think") { ?>
							<span class="<?php echo $bValue; ?>-badge badge"><?php echo $bLabel; ?></span>
						<?php } else { 
							$country = get_field_object('country');
							$value = $country['value'];
							$label = $country['choices'][ $value ];?>
							<span class="country flag-icon flag-icon-<?php echo $value; ?>"><?php echo $label; ?></span>
						<?php } ?>
						<h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
						<p><?php the_excerpt(); ?></p>
					</div>	
				<?php } ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>