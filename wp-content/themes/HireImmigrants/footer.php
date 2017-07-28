<div class="newsletter">
	<div class="container">
		<div class="left">
			<span>Subscribe to our newsletter</span>
			<h5>Monthly updates.<br>Currated content.</h5>
		</div>
		<div class="right">
			<form action="">
				<input type="text" placeholder="Email Address">
				<button type="submit">
					Subscribe
					<svg class="ico">
						<use xlink:href="#envelope"/>
					</svg>
				</button>
			</form>
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="footer__top">
			<div class="footer__logo">
				<svg class="ico">
					<use xlink:href="#logo-w"/>
				</svg>
				<span>Hire Immigrants</span>
			</div>
			<div class="social">
				<a href="#" class="social__twitter">
					<svg class="ico">
						<use xlink:href="#twitter"/>
					</svg>
					Twitter
				</a>
				<a href="#" class="social__linkedin">
					<svg class="ico">
						<use xlink:href="#linkedin"/>
					</svg>
					Linkedin
				</a>
				<a href="#" class="social__rss">
					<svg class="ico">
						<use xlink:href="#rss"/>
					</svg>
					RSS
				</a>
			</div>
		</div>
		<div class="footer__middle">
			<p>Stay connected to the latest news about immigrant employment practices</p>
			<?php wp_nav_menu( array( 'menu' => 'Footer Navigation' ) ); ?>
		</div>
		<div class="footer__bottom">
			<p>&copy; Hire Immigrants. All Rights Reserved.</p>
		</div>
	</div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/hire-immigrants.js"></script>
<?php wp_footer(); ?>
</body>
</html>