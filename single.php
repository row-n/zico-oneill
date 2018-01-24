<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('page--content'); ?>>

				<?php the_content(); ?>

			</article>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'inc/none' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>
