<!-- NEWS SECTION -->
<?php if( have_rows('articles') ): ?>
<section id="news">
	<div class="inner">
		<h2 class="centered-text">News</h2>
		<div class="news-articles-container">
			<?php while ( have_rows('articles') ) : the_row(); ?>
			<div class="news-article half">
				<div class="news-article-inner">
					<?php 
					$image = get_sub_field('image');
					$size = 'large';
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					} ?>
					<div class="article-content">
						<h3><?php the_sub_field('article_title'); ?></h3>
						<a href="<?php the_sub_field('article_link'); ?>" target="_blank">Read Article</a>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<a href="#">More Articles</a>
		</div>
	</div>
</section>
<?php endif; ?>
<!-- / NEWS SECTION -->