<?php if ( get_field('section_title') ): ?>
<h2><?php the_field('section_title'); ?></h2>
<?php endif; ?>
<div class="inquiry-form" style="margin: 25px 0;">
	<?php echo do_shortcode('[contact-form-7 id="149" title="Get in Touch"]'); ?>
</div>