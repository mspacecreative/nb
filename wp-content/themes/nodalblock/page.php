<?php  
get_header();
?>

		<!-- HERO -->
		<?php if ( get_field('page_bg_img') ): ?>
		<div class="hero-page" style="background-image: url(<?php the_field('page_bg_img'); ?>);">
		</div>
		<?php else : ?>
		<div class="hero-page" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/hero-bg-img.jpg);">
		</div>
		<?php endif; ?>
		<!-- / HERO -->
		
		<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			$fullwidth = get_field('full_width');
			if ( $fullwidth ): ?>
			<div class="full-width inner-page">
			<?php else : ?>
			<div class="inner inner-page">
			<?php endif; ?>
				
				<!-- PAGE TITLE -->
				<div class="page-title">
					<h1><?php echo the_title(); ?></h1>
				</div>
				<!-- / PAGE TITLE -->
				
				<?php the_content(); ?>
			</div>
		
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
		<?php get_footer(); ?>
