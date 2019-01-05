<?php
/**
 * The Press Release index/archive
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="cell small-3">
			<h1><?php echo post_type_archive_title( '', false ); ?></h1>
			<h3>Filter By Year:</h3>
			<?php the_terms( $post->ID, 'pr_year', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
			<h3>Filter By Category:</h3>
			<?php the_terms( $post->ID, 'pr_category', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
		</div>
		<div class="cell small-9">
			<?php $args = array('post_type'=>array('press_releases'));
				query_posts($args); ?>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<div class="grid-x grid-margin-x">
						<div class="cell small-3">
							<?php get_template_part( 'template-parts/featured-image' ); ?>
						</div>
						<div class="cell small-9">
							<h2><?php the_title(); ?></h2>
							<p><?php echo strip_tags( get_the_excerpt() ); ?> <a href="<?php the_permalink(); ?>"> more »</a></p>
							<?php the_date(); ?>
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; // End have_posts() check. ?>
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
