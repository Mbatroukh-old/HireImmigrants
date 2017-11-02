<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#4a4b9b">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/i/favicon.png" />
	<title><?php wp_title('-') ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hire-immigrants.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php get_template_part('templates/svg', 'icons'); ?>
<header>
	<div class="container">
		<div class="left">			
			<a href="/" class="logo">
				<svg class="ico">
					<use xlink:href="#logo-c"/>
				</svg>
				Hire Immigrants
			</a>
		</div>
		<div class="right">
			<?php wp_nav_menu( array( 
				'menu' => 'Main Navigation',
				'container' => 'nav',
				'container_class' => 'main-menu'
			) ); ?>
			<a class="search desktop-only">
				<form class="search-form" method="get" action="/">
					<input type="text" id="s" name="s" placeholder="Search...">
					<button type="submit">
						<svg class="ico mag-glass">
							<use xlink:href="#mag-glass"/>
						</svg>
					</button>
					<svg class="ico close">
						<use xlink:href="#x"/>
					</svg>
				</form>
				<svg class="ico search-trigger">
					<use xlink:href="#mag-glass"/>
				</svg>
			</a>
			<div class="not-desktop mobile-menu-trigger">
				<span>Menu</span>
			</div>
			<div class="not-desktop mobile-navigation">
				<?php wp_nav_menu( array( 
					'menu' => 'Main Navigation',
					'container' => 'nav',
					'container_class' => 'mobile-main-menu'
				) ); ?>
				<form class="search-form" method="get" action="/">
					<button type="submit">
						<svg class="ico mag-glass">
							<use xlink:href="#mag-glass"/>
						</svg>
					</button>
					<input type="text" id="s" name="s" placeholder="Search">
				</form>
				</a>
				<span class="mobile-menu-close">Close</span>
			</div>
		</div>
	</div>
</header>