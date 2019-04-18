<!-- PRODUCTS SECTION -->
<?php if( have_rows('products') ): ?>
<section id="products">
	
	<div class="inner">
		<h2 class="centered-text">PRODUCTS</h2>
	</div>
	
	<?php while ( have_rows('products') ) : the_row(); ?>
	<div class="parallaxer-container dzsparallaxer auto-init height-is-based-on-content">
		<div class="product-container first divimage dzsparallaxer--target" style="background-image: url(<?php the_sub_field('product_bg_img'); ?>);"></div>
		<div class="inner clearfix">
			<div class="product-info-box">
				<div class="product-icon">
					<?php 
					$image = get_sub_field('image');
					$size = 'large';
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					} ?>
				</div>
				<h3><?php the_sub_field('product_name'); ?></h3>
				<?php the_sub_field('product_description'); ?>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	
	<div class="more-products">
		<div class="inner">
			<h2 class="centered-text">Other Offerings</h2>
			<div class="offerings-container clearfix">
				<div class="offering">
					<h3>Nodal Pic</h3>
					<p>Authenticate pictures for process improvement</p>
				</div>
				<div class="offering">
					<h3>Custom Development</h3>
					<p>Easily integrate our API into your custom project</p>
				</div>
			</div>
		</div>
	</div>
	
</section>
<?php endif; ?>
<!-- / PRODUCTS SECTION -->