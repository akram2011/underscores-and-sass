<?php
/**
 * Template part for displaying the fontpage
 * Prepared for page builder
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package petj-17
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="petjFrontpage" class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
