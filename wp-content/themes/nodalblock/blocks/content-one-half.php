<div class="clearfix">
	<?php if ( get_field('content_title') ): ?>
	<h2 class="centered-text"><?php the_field('content_title') ?></h2>
	<?php endif; ?>
	<?php if ( get_field('content_subtitle') ): ?>
	<h3 class="centered-text"><?php the_field('content_subtitle') ?></h3>
	<?php endif; ?>
	<?php 
	if ( $fullwidth ): ?>
	<div class="full-width-inner">
		<div class="half-col-content first">
			<?php the_field('left_col'); ?>
		</div>
		<div class="half-col-content">
			<?php the_field('right_col'); ?>
		</div>
	</div>
	<?php else : ?>
	<div class="half-col-content first">
		<?php the_field('left_col'); ?>
	</div>
	<div class="half-col-content">
		<?php the_field('right_col'); ?>
	</div>
	<?php endif; ?>
</div>