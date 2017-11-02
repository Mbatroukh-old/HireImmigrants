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
		<?php $pageTitle = single_term_title('', 0); ?>
		<h1><?php echo $pageTitle ?></h1>
		<?php if ($pageTitle === 'Why Hire'){?>
			<span>Thie business case</span>
		<?php } elseif ($pageTitle === 'Employer Champions') { ?>
			<span>Corporate leaders</span>
		<?php } elseif ($pageTitle === 'Diversity at Work') { ?>
			<span>An inclusinve workforce</span>
		<?php } else { ?>
			<span>Innovative approaches</span>
		<?php } ?>
	</div>
</div>
<div class="catgroup story-taxonomy">
	<div class="container">
		<div class="post__group <?php if($pageTitle === 'Employer Champions') { ?>post__group--employee-champions<?php } ?>">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php
					$country = get_field_object('country');
					$value = $country['value'];
					$label = $country['choices'][ $value ];
					$organization = get_field('organization');
				?>
				<div class="post">
					<a href="<?php the_permalink(); ?>">
						<?php if($pageTitle === 'Employer Champions') { ?>
							<div class="post__image">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php } else { ?>
							<div class="post__image" style='background-image: url("<?php the_post_thumbnail_url(); ?>")'></div>
						<?php } ?>
					</a>
					<?php if($pageTitle === 'Employer Champions') { ?>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<span class="country flag-icon flag-icon-<?php echo $value; ?>"><?php echo $label; ?></span>
					<?php } else { ?>
						<span class="date"><?php echo get_the_date($format, $post_id); ?></span>
						<span class="country flag-icon flag-icon-<?php echo $value; ?>"><?php echo $label; ?></span>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<?php if($organization) { ?>
							<span class="organization"><?php echo $organization; ?></span>
						<?php } ?>
					<?php } ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>