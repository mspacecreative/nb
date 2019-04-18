<!-- ICONS AND TEXT -->
<section id="digi-identification">
	<div class="inner digi-verification">
		<?php if ( get_field('title') ): ?>
			<h2><?php the_field('title'); ?></h2>
		<?php endif; ?>
	</div>
	<?php if( have_rows('icons') ): ?>
	<div class="icons-container">
		<div class="inner clearfix">
			<?php while ( have_rows('icons') ) : the_row(); ?>
			<div class="icon">
				<?php
				$image = get_sub_field('icon');
				$size = 'small'; // (thumbnail, medium, large, full or custom size)
				if( $image ) {
					echo wp_get_attachment_image( $image, $size );
				} ?>
				<h3><?php the_sub_field('heading'); ?></h3>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif; ?>
</section>
<!-- / ICONS AND TEXT -->