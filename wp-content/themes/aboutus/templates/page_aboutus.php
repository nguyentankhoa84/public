<?php
/**
 * Template Name: About us.
 *
 * @package aboutus
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/aboutus/header' );
	get_template_part( 'template-parts/aboutus/intro' );
	get_template_part( 'template-parts/aboutus/pillars' );
	get_template_part( 'template-parts/aboutus/achievement' );
	get_template_part( 'template-parts/aboutus/core-values' );
	get_template_part( 'template-parts/aboutus/leadership' );
endwhile; // End of the loop.

get_footer();
