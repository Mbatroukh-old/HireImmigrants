<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); wp_title('-') ?></title>
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/trueno" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hire-immigrants.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php get_template_part('templates/svg', 'icons'); ?>
<header>
	<div class="container">
		<div class="left">			
			<a href="#" class="logo">
				<svg class="ico">
					<use xlink:href="#logo-c"/>
				</svg>
				Hire Immigrants
			</a>
		</div>
		<div class="right">
			<?php /* wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); */ ?>
			<nav class="main-menu">
				<ul>
					<li><a href="/read">Read</a></li>
					<li class="current"><a href="#">Watch</a></li>
					<li><a href="#">Stories</a></li>
					<li><a href="#">Reports</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<a class="search">
				<svg class="ico">
					<use xlink:href="#mag-glass"/>
				</svg>
			</a>
		</div>
	</div>
	<div class="container">
		<!-- <svg class="ico">
			<use xlink:href="#announcements"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#arrow"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#employer-reports"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#logo-c"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#logo-w"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#mag-glass"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#news"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#ontario"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#policy"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#rbc"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#ryerson"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#stories"/>
		</svg>
		<svg class="ico">
			<use xlink:href="#webinars"/>
		</svg> -->
	</div>
</header>