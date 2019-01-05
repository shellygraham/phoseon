<?php
/*
Template Name: Events Template
*/
get_header(); ?>

<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="cell small-12">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="grid-x grid-margin-x">
		<div class="cell small-3">
			<h3>Filter By Year:</h3>
			<?php get_sidebar(); ?>
		</div>
		<div class="cell small-9">
			<h3>Press Releases</h3>
			<?php $args = array('post_type'=>array('events'));
				query_posts($args); ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/events', get_post_format() ); ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( function_exists( 'foundationpress_pagination' ) ) :
					foundationpress_pagination();
				elseif ( is_paged() ) :
				?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer();
