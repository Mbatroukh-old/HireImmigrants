<?php
/* Template Name: About Page */
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="about-page">
		<div class="container">
			<div class="about-banner">
				<?php the_content(); ?>
				<div class="item-row">
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/i/business-case.png" alt="">
						<span>Making the<br>business case</span>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/i/identify.png" alt="">
						<span>Identifying outdated<br> hiring practices</span>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/i/leveraging.png" alt="">
						<span>Leveraging immigrant<br>talent for recruitment</span>
					</div>
				</div>
			</div>
			<div class="mission">
				<span>Mission</span>
				<h3>Helping employers and<br>immigrants work better together</h3>
				<p>We curate innovative best practices in immigrant employment<br>from a committed network of global employers and thought leaders</p>
				<div class="item-col">
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/i/centered.png" alt="">
						<span>Employer-centered</span>
						<p>Resources are developed with an employer in mind. Access relevant information, tools and reports aimed to empower employers to build a diverse and inclusive workforce</p>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/i/global.png" alt="">
						<span>Global perspective</span>
						<p>Businesses are more similar than they are different. Learn from global best practices on the benefits of a diverse workforce</p>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/i/hub.png" alt="">
						<span>Hub</span>
						<p>A network hub connecting key stakeholders to valuable information, and raising awareness about the opportunities immigrants bring to local and global businesses</p>
					</div>
				</div>
			</div>
			<div class="activities">
				<h3>Activities</h3>
				<div class="item-col">
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/i/success.png" alt="">
						<span>Success stories</span>
						<p>Employer’s share best practices in immigrant employment</p>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/i/think.png" alt="">
						<span>Think</span>
						<p>Innovative thought leaders share new ideas in related fields</p>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/i/qna.png" alt="">
						<span>Expert Q&amp;A</span>
						<p>Experts respond to questions, and provide insights into practices, initiatives and/or services</p>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/i/webinars.png" alt="">
						<span>Webinars</span>
						<p>International learning exchange that allows participants direct access to expert speakers</p>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/i/reports.png" alt="">
						<span>Reports</span>
						<p>Relevant information written for an employer audience</p>
					</div>
				</div>
			</div>
		</div>	
	</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>