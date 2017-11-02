<?php get_header(); ?>
<div class="search-page">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<h1 class="searched-term"><?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
			<?php while ( have_posts() ) : the_post(); ?>
				<a class="listing" href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
				</a>
			<?php endwhile; ?>
			<?php wp_pagenavi(); ?>
		<?php else : ?>
			<h1 class="no-results-searched-term"><?php _e( 'Nothing Found', 'blankslate' ); ?></h1>
			<span class="apologies"><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></span>
			<form class="no-results-search-form" method="get" action="/">
				<input type="text" id="s" name="s" placeholder="Search...">
				<button type="submit">
					<svg class="ico mag-glass">
						<use xlink:href="#mag-glass"/>
					</svg>
				</button>
			</form>
		<?php endif; ?>	
	</div>
</div>
<?php get_footer(); ?>