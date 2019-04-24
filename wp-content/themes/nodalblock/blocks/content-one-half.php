<?php if ( get_field('background_img') ): ?>
<div style="background-image: url(<?php the_field('background_img'); ?>);" class="has-bg-img">
<?php else : ?>
<div class="clearfix">
<?php endif; ?>
	<div class="full-width-inner clearfix">
		<?php if ( get_field('content_title') ): ?>
		<h2 class="centered-text"><?php the_field('content_title') ?></h2>
		<?php endif; ?>
		<?php
		$alignment = get_field('text_alignment');
		if ( get_field('content_subtitle') ):
		 	if ( $alignment ): ?>
			<h3 class="<?php echo $alignment; ?>"><?php the_field('content_subtitle') ?></h3>
			<?php else : ?>
			<h3><?php the_field('content_subtitle'); ?></h3>
			<?php endif; ?>
		<?php endif; ?>
		<div class="half-col-content first">
			<?php the_field('left_col'); ?>
		</div>
		<div class="half-col-content">
			<?php the_field('right_col'); ?>
		</div>
	</div>
</div>