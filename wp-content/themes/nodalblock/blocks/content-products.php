<!-- PRODUCTS SECTION -->
<section id="products">
	
	<div class="inner">
		<h2 class="centered-text">PRODUCTS</h2>
	</div>
	
	<?php if( have_rows('products') ): ?>
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
	<?php endwhile;
	endif; ?>
	
	<?php if( have_rows('more_products_section') ):  ?>
		<div class="more-products">
			<div class="inner">
				<?php while( have_rows('more_products_section') ): the_row(); ?>
				<h2 class="centered-text"><?php the_sub_field('more_products_title'); ?></h2>
				<div class="offerings-container clearfix">
					
					<?php if( have_rows('product_one_section') ):  ?>
					<?php while( have_rows('product_one_section') ): the_row(); ?>
					<div class="offering">
						<h3><?php the_sub_field('product_one_title'); ?></h3>
						<?php the_sub_field('product_one_blurb'); ?>
					</div>
					<?php endwhile;
					endif; ?>
					
					<?php if( have_rows('product_two_section') ):  ?>
					<?php while( have_rows('product_two_section') ): the_row(); ?>
					<div class="offering">
						<h3><?php the_sub_field('product_two_title'); ?></h3>
						<?php the_sub_field('product_two_blurb'); ?>
					</div>
					<?php endwhile;
					endif; ?>
					
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>
	
</section>
<!-- / PRODUCTS SECTION -->