			<!-- FOOTER -->
			<div class="footer-bottom">
				<div class="inner clearfix">
					<div class="half-col">
						<p>&copy; <?php echo date('Y'); ?> NodalBlock. All Rights Reserved.</p>
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