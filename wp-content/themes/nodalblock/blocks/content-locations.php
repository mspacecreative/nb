<?php if( have_rows('locations') ): ?>
<div class="fifty-fifty clearfix">
	<?php while( have_rows('locations') ): the_row(); ?>
	<div class="half-col">
		<?php the_sub_field('location_one_map'); ?>
		<?php the_sub_field('location_one_info'); ?>
	</div>
	<div class="half-col">
		<?php the_sub_field('location_two_map'); ?>
		<?php the_sub_field('location_two_info'); ?>
	</div>
	<?php endwhile; ?>
</div>
<?php endif; ?>