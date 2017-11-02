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
		<?php if ($pageTitle === 'Employer Reports'){?>
			<span>Questions and answers from experts</span>
		<?php } else { ?>
			<span>Guides for success</span>
			<div class="badges">
				<span class="all-badge badge">All</span>
				<span class="policy-badge badge">Policy</span>
				<span class="research-badge badge">Research</span>
			</div>
		<?php } ?>
	</div>
</div>
<div class="catgroup story-taxonomy">
	<div class="container">
		<div class="post__group">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php
					$badge = get_field_object('badge');
					$value = $badge['value'];
					$label = $badge['choices'][ $value ];
					$organization = get_field('organization');
				?>
				<div class="post <?php echo $value; ?>">
					<a href="<?php the_permalink(); ?>">
						<div class="post__image" style='background-image: url("<?php the_post_thumbnail_url(); ?>")'></div>
					</a>
					<span class="date"><?php echo get_the_date($format, $post_id); ?></span>
					<?php if ($pageTitle === 'Employer Reports'){?>
						
					<?php } else { ?>
						<span class="<?php echo $value; ?>-badge badge"><?php echo $label; ?></span>
					<?php } ?>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php if($organization) { ?>
						<span class="organization"><?php echo $organization; ?></span>
					<?php } ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>