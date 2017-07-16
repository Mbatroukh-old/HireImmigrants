<?php get_header(); ?>
<div class="home-banner">
	<img src="<?php echo get_template_directory_uri(); ?>/i/banner.png" alt="">
	<div class="overlay">
		<div class="container">
			<span>Think</span>
			<h1>Ten simple tips why diversity is good for business</h1>
			<a href="#" class="btn btn-arrow purple">
				Read post
				<svg class="ico">
					<use xlink:href="#arrow"/>
				</svg>
			</a>
		</div>
	</div>	
</div>
<div class="spotlights">
	<div class="container">
		<div class="spotlight-wrap">
			<div class="spotlight">
				<span>About Us</span>
				<h6>We help employers &amp; immigrants work better together</h6>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
				<a href="#" class="btn btn-arrow purple">
					Learn about us
					<svg class="ico">
						<use xlink:href="#arrow"/>
					</svg>
				</a>
			</div>
			<div class="spotlight">
				<span>Subscribe to out newsletter</span>
				<h6>Get the latest in immigrant employment resources and best practices</h6>
				<!-- <p></p> -->
				<form>
					<input type="text" placeholder="Email Address">
					<input class="btn purple" type="submit" value="Subscribe">
				</form>
			</div>
		</div>
	</div>
</div>
<div class="category-wrap">
	<div class="container">
		<h2>What are you looking for today?</h2>
		<div class="category-grid">
			<div class="category-row">
				<div class="block">
					<svg class="ico">
						<use xlink:href="#webinars"/>
					</svg>
					<span>Webinars</span>
				</div>
				<div class="block">
					<svg class="ico">
						<use xlink:href="#policy"/>
					</svg>
					<span>Policy</span>
				</div>
				<div class="block">
					<svg class="ico">
						<use xlink:href="#employer-reports"/>
					</svg>
					<span>Reports</span>
				</div>
			</div>
			<div class="category-row">
				<div class="block">
					<svg class="ico">
						<use xlink:href="#news"/>
					</svg>
					<span>News</span>
				</div>
				<div class="block">
					<svg class="ico">
						<use xlink:href="#stories"/>
					</svg>
					<span>Stories</span>
				</div>
				<div class="block">
					<svg class="ico">
						<use xlink:href="#announcements"/>
					</svg>
					<span>Announcements</span>
				</div>
			</div>
				</div>
		</div>
</div>
<div class="explore-wrap">
	<div class="container">
		<div class="explore-highlights">
			<div class="row">
				<div class="block ">
					<h6>Hire Refugees</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam explicabo provident laboriosam maiores iusto ipsum.</p>
					<a href="#" class="btn btn-arrow">Explore</a>
				</div>
				<div class="block">
					<h6>Small Business Resources</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam explicabo provident.</p>
					<a href="#" class="btn btn-arrow">Explore</a>
				</div>
			</div>
			<div class="row">
				<div class="block">
					<h6>Access immigrant talent</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam explicabo provident laboriosam maiores iusto ipsum.</p>
					<a href="#" class="btn btn-arrow">Discover careers</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>