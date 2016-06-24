<?php
/**
 Template Name: Content
 * The template for displaying all pages.
 *
 * @package zicooneill
 */

get_header(); ?>

	<aside class="aside">
		<?php get_sidebar(); ?>
	</aside>

	<main id="main" class="site-main content-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>
	</main><!-- #main -->

<?php get_footer(); ?>
