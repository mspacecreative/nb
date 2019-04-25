<?php  
get_header();
?>

		<!-- HERO -->
		<?php if ( get_field('page_bg_img') ): ?>
		<div class="hero-page" style="background-image: url(<?php the_field('page_bg_img'); ?>);">
		</div>
		<?php else : ?>
		<div class="hero-page" style="background-image: url(<?php echo get_template_directory_uri(); ?>/video/nodalblock-poster.jpg);">
		</div>
		<?php endif; ?>
		<!-- / HERO -->
			
			<section id="not-found">
				<div class="inner inner-page">
					
					<!-- PAGE TITLE -->
					<div class="page-title">
						<h1><?php echo esc_html_e( 'Page Not Found' ); ?></h1>
					</div>
					<!-- / PAGE TITLE -->
					
					<div style="max-width: 750px; margin: auto;">
						<p class="centered-text"><?php esc_html_e( 'Sorry, this page does not exist. Please use the navigation menu above to find what you&#8217;re looking for, or click ' ); ?><a href="<?php echo home_url(); ?>">here</a><?php esc_html_e(' to go to the home page.'); ?>
						</p>
					</div>
				</div>
			</section>
		
		<?php get_footer(); ?>
