<footer class="footer light-text">
	<div class="inner">
		<?php if ( get_field('footer_title') ): ?>
		<h2><?php the_field('footer_title'); ?></h2>
		<?php endif; ?>
	</div>
	<div class="inner clearfix">
		<div class="half-col request-demo">
			<?php
			if( have_rows('left_column') ):
			while( have_rows('left_column') ): the_row();
			if ( get_sub_field('footer_left_blurb') ): ?>
			<h4><?php the_sub_field('footer_left_blurb'); ?></h4>
			<?php endif; ?>
			<a href="<?php the_sub_field('footer_left_link'); ?>" class="cta-button"><?php the_sub_field('footer_left_label'); ?></a>
			<?php endwhile;
			endif; ?>
		</div>
		<div class="half-col list-builder">
			<?php
			if( have_rows('right_column') ):
			while( have_rows('right_column') ): the_row();
			if ( get_sub_field('footer_right_blurb') ): ?>
			<h4><?php the_sub_field('footer_right_blurb'); ?></h4>
			<?php endif;
			echo do_shortcode('[contact-form-7 id="110" title="List Builder (EN)"]');
			endwhile;
			endif; ?>
		</div>
	</div>
</footer>