<footer class="footer light-text">
	<div class="inner">
		<?php if ( get_field('footer_title') ): ?>
		<h2><?php the_field('footer_title'); ?></h2>
		<?php endif; ?>
	</div>
	<div class="inner clearfix">
		<div class="half-col request-demo">
			<?php
			if( have_rows('footer_left') ):
			while( have_rows('footer_left') ): the_row();
			if ( get_field('footer_left_blurb') ): ?>
			<h4 ><?php the_field('footer_left_blurb'); ?></h4>
			<?php endif; ?>
			<?php if ( get_field('footer_left_link') ): ?>
			<a href="<?php the_field('footer_left_link'); ?>" class="cta-button"><?php the_field('footer_left_label'); ?></a>
			<?php endif; ?>
			<?php endwhile;
			endif; ?>
		</div>
		<div class="half-col list-builder">
			<?php if ( get_field('footer_right_blurb') ): ?>
			<h4><?php the_field('footer_right_blurb'); ?></h4>
			<span class="input-container">
				<?php echo do_shortcode('[contact-form-7 id="110" title="List Builder (EN)"]'); ?>
			</span>
		</div>
	</div>
</footer>