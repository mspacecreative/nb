			<!-- FOOTER -->
			<footer class="footer light-text">
				<div class="inner">
					<h2>Get Started</h2>
				</div>
				<div class="inner clearfix">
					<div class="half-col request-demo">
						<h4 >Are you ready to test drive our product? Request a demo below.</h4>
						<a href="#" class="cta-button">Request a Demo</a>
					</div>
					<div class="half-col list-builder">
						<h4>Subscribe to our newsletter and stay up to date on our products and solutions.</h4>
						<span class="input-container">
							<input type="email" name="Email Address" placeholder="Enter Email Address" />
							<a href="#" class="cta-button">subscribe</a>
						</span>
					</div>
				</div>
			</footer>
			<div class="footer-bottom">
				<div class="inner clearfix">
					<div class="half-col">
						<p>&copy; 2019 NodalBlock. All Rights Reserved.</p>
					</div>
					<div class="half-col">
						<?php if( have_rows('social_media', 'options') ): ?>
						<ul class="social-media">
							<?php while( have_rows('social_media', 'options') ): the_row(); ?>
							<li><a href="<?php the_sub_field('facebook', 'options'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="<?php the_sub_field('twitter', 'options'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="<?php the_sub_field('linkedin', 'options'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<?php endwhile; ?>
						</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<!-- / FOOTER -->
			
			<?php wp_footer(); ?>
    </body>
</html>