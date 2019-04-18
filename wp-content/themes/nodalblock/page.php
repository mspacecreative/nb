<?php  
get_header();
?>

		<!-- HERO -->
		<div class="hero-page">
		</div>
		<!-- / HERO -->
		
		<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
			<div class="inner inner-page">
				
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
