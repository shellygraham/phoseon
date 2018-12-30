<?php
/*
Template Name: Front
*/
get_header(); ?>

<section class="landing-page">

<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>

<?php endwhile; ?>

</section>

<?php get_footer();
