<?php 
/* Template Name: Home Page */ 
get_header();
?>

		<!-- HERO -->
		<div class="hero">
			<video autoplay="true" preload="auto" loop playsinline muted poster="<?php echo get_template_directory_uri(); ?>/video/nodalblock-poster.jpg">
				<source src="<?php echo get_template_directory_uri(); ?>/video/nodalblock.mp4" type="video/mp4" />
			</video>
			<div class="inner clearfix">
				<div class="tagline">
					<h1><?php echo get_bloginfo('description'); ?></h1>
				</div>
			</div>
		</div>
		<!-- / HERO -->
		
		<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();
				
			the_content();
		
		endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
		<?php get_footer(); ?>
