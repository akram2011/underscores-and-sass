<?php
/**
 * Template Name: Full Width
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package petj-17
 */

get_header(); 

			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'frontpage' );
			endwhile; // End of the loop.

get_footer();
