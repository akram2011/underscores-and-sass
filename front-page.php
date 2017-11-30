<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package petj-17
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main">
							<h1> This is: front-page.php </h1>
			<article id="openStreetMap">
				<h3> Open Street Map iframe </h3>
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=10.09695053100586%2C56.10641692901264%2C10.34242630004883%2C56.1900872479648&amp;layer=hot" style="border: 1px solid black"></iframe><br/><small><a href="http://www.openstreetmap.org/#map=13/56.1483/10.2197&amp;layers=H">View Larger Map</a></small>

			</article>



			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
