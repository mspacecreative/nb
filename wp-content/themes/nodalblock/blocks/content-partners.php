<!-- OUR PARTNERSHIPS -->
<section id="partnerships">
	<div class="inner">
		<h2 class="centered-text"><?php the_field('section_title'); ?></h2>
		<ul class="logo-container">
			
			<?php 
			$images = get_field('partner_logos');
			$size = 'medium';
						
			if( $images ):
			foreach( $images as $image ): ?>
				<li>
					<?php
					$externallink = get_field('external_link', $image['ID']);
					if ( $externallink ): ?>
					<a href="<?php the_field('external_link', $image['ID']); ?>" target="_blank">
						<?php
						$squarelogo = get_field('square_logo', $image['ID']);
						if ( $squarelogo ): ?>
						<?php echo wp_get_attachment_image( $image['ID'], $size, "", ["class" => "square-logo"] ); ?>
						<?php else : ?>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						<?php endif; ?>
					</a>
					<?php else : ?>
						<?php
						$squarelogo = get_field('square_logo', $image['ID']);
						if ( $squarelogo ): ?>
						<?php echo wp_get_attachment_image( $image['ID'], $size, "", ["class" => "square-logo"] ); ?>
						<?php else : ?>
						<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						<?php endif; ?>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
			<?php endif; ?>
			
		</ul>
	</div>
</section>
<!-- / OUR PARTNERSHIPS -->