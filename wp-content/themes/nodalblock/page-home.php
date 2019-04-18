<?php 
/* Template Name: Home Page */ 
get_header();
?>

		<!-- HERO -->
		<div class="hero">
			<video autoplay="true" preload="auto" loop playsinline muted poster="<?php echo get_template_directory_uri(); ?>/img/hero-bg-img.jpg">
				<source src="<?php echo get_template_directory_uri(); ?>/video/1007431315-preview.mp4" type="video/mp4" />
			</video>
			<div class="inner clearfix">
				<div class="tagline">
					<h1>Identify &amp; Authenticate</h1>
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
		
		<!-- OUR PARTNERSHIPS -->
		<section id="partnerships">
			<div class="inner">
				<h2 class="centered-text">Our Partnerships</h2>
				<ul class="logo-container">
					<li class="partner-logo">
						<img src="img/kpmg.svg" />
					</li>
					<li class="partner-logo">
						<img src="img/medlab.svg" />
					</li>
					<li class="partner-logo">
						<img src="img/neoris.svg" />
					</li>
					<li class="partner-logo">
						<img src="img/finnovating.svg" />
					</li>
					<li class="partner-logo">
						<img src="img/bankia.svg" />
					</li>
					<li class="partner-logo">
						<img src="img/rubricall.svg" />
					</li>
				</div>
			</div>
		</section>
		<!-- / OUR PARTNERSHIPS -->
		
		<?php get_footer(); ?>
