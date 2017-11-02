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
	<div class="container-w">
		<div class="spotlight-wrap">
			<div class="spotlight">
				<span>About Us</span>
				<h6>We help employers and immigrants work better together</h6>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
				<a href="#" class="btn btn-arrow purple">
					Learn more
					<svg class="ico">
						<use xlink:href="#arrow"/>
					</svg>
				</a>
			</div>
			<div class="spotlight">
				<span>Subscribe to out newsletter</span>
				<h6>Get the latest in immigrant employment<br>resources and best practices</h6>
				<!-- <p></p> -->
				<form>
					<input type="text" placeholder="Email Address">
					<button class="btn purple" type="submit">
						Subscribe
						<svg class="ico">
							<use xlink:href="#envelope"/>
						</svg>
					</button>
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
				<a href="#">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#webinars"/>
						</svg>
						<span>Webinars</span>
					</div>
				</a>
				<a href="#">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#policy"/>
						</svg>
						<span>Policy</span>
					</div>
				</a>
				<a href="#">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#employer-reports"/>
						</svg>
						<span>Reports</span>
					</div>
				</a>
			</div>
			<div class="category-row">
				<a href="#">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#news"/>
						</svg>
						<span>News</span>
					</div>
				</a>
				<a href="#">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#stories"/>
						</svg>
						<span>Stories</span>
					</div>
				</a>
				<a href="#">
					<div class="block">
						<svg class="ico">
							<use xlink:href="#announcements"/>
						</svg>
						<span>Announcements</span>
					</div>
				</a>
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
					<p>Discover best practices in refugee employment from international employers</p>
					<a href="#" class="btn btn-arrow">
						Explore best practices
						<svg class="ico">
							<use xlink:href="#arrow"/>
						</svg>
					</a>
				</div>
				<div class="block">
					<h6>Small Business Resources</h6>
					<p>Connect to tools and resources for SMEs and immigrant entrepreneurs</p>
					<a href="#" class="btn btn-arrow">
						Get tools &amp; resources
						<svg class="ico">
							<use xlink:href="#arrow"/>
						</svg>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="block">
					<div class="block__group">
						<h6>Access immigrant talent</h6>
						<p>Accurate, fast, and cost-effective platform that connects you to immigrant job seekers based on skills</p>
					</div>
					<a href="#" class="btn btn-arrow">
						Discover talent
						<svg class="ico">
							<use xlink:href="#arrow"/>
						</svg>
					</a>
					<span class="powered-by">
						Powered by
						<img src="<?php echo get_template_directory_uri(); ?>/i/magnet-logo.png" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/i/magnet-text.png" alt="">
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="founding-funded-sister">
	<div class="container-w">
		<div class="tab-row">
			<button class="active" id="founding">Our Founding Partners</button>
			<button id="funded">Funded by</button>
			<button id="sister">Sister Sites</button>
		</div>
		<div class="logo-row visible founding">
			<img src="<?php echo get_template_directory_uri(); ?>/i/GDX.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/Maytree.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/McConnell.png" alt="">
		</div>
		<div class="logo-row funded">
			<img src="<?php echo get_template_directory_uri(); ?>/i/RBC.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/ontario.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/TRSM.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/RU.png" alt="">
		</div>
		<div class="logo-row sister">
			<img src="<?php echo get_template_directory_uri(); ?>/i/magnet.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/CoM.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/GDX.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/i/DOB.png" alt="">
		</div>
	</div>
</div>
<?php get_footer(); ?>