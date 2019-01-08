<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>
	<div class="featured-hero" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'full' ); ?>, small], [<?php the_post_thumbnail_url( 'full' ); ?>, medium], [<?php the_post_thumbnail_url( 'full' ); ?>, large], [<?php the_post_thumbnail_url( 'full' ); ?>, xlarge]">
	</div>
<?php endif;
