<div class="newsletter">
	<div class="container">
		<div class="left">
			<span>Subscribe to our newsletter</span>
			<h5>Monthly updates. <br>Currated content.</h5>
		</div>
		<div class="right">
			<?php echo do_shortcode('[ctct form="184"]'); ?>
			<!-- <form action="">
				<input type="text" placeholder="Email Address">
				<button type="submit">
					Subscribe
					<svg class="ico">
						<use xlink:href="#envelope"/>
					</svg>
				</button>
			</form> -->
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="footer__left">
			<div class="footer__logo">
				<a href="/">
					<svg class="ico">
						<use xlink:href="#logo-w"/>
					</svg>
					<span>Hire Immigrants</span>
				</a>
			</div>
			<?php wp_nav_menu( array( 'menu' => 'Footer Navigation' ) ); ?>
			<p class="copyright">&copy; Hire Immigrants. All Rights Reserved.</p>
		</div>
		<div class="footer__right">
			<span>Stay Connected</span>
			<div class="social">
				<a href="https://twitter.com/hireimmigrants" class="social__twitter" target="_blank">
					<svg class="ico">
						<use xlink:href="#twitter"/>
					</svg>
					Twitter
				</a>
				<a href="//www.linkedin.com/company/hireimmigrants-ca" class="social__linkedin" target="_blank">
					<svg class="ico">
						<use xlink:href="#linkedin"/>
					</svg>
					Linkedin
				</a>
				<a href="/feed" class="social__rss" target="_blank">
					<svg class="ico">
						<use xlink:href="#rss"/>
					</svg>
					RSS
				</a>
			</div>
		</div>
	</div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/hire-immigrants.js"></script>
<?php wp_footer(); ?>
</body>
</html>