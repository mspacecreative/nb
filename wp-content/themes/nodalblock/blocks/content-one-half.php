<?php if ( get_field('background_img') ): ?>
<div style="background-image: url(<?php the_field('background_img'); ?>);" class="has-bg-img red-text">
<?php else : ?>
<div class="red-text">
<?php endif; ?>
	<div class="full-width-inner clearfix">
		<?php if ( get_field('content_title') ): ?>
		<h2 class="<?php the_field('text_alignment'); ?>"><?php the_field('content_title'); ?></h2>
		<?php endif; ?>
		<?php
		if ( get_field('content_subtitle') ): ?>
			<h3 class="<?php the_field('text_alignment'); ?>"><?php the_field('content_subtitle'); ?></h3>
		<?php endif; ?>
		<div class="half-col-content first">
			<?php the_field('left_col'); ?>
		</div>
		<div class="half-col-content">
			<?php the_field('right_col'); ?>
		</div>
	</div>
</div>