<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('page--index'); ?>>

				<?php the_content(); ?>

			</article>

		<?php endwhile; ?>

		<?php get_template_part('inc/pagination'); ?>

	<?php else : ?>

		<?php get_template_part( 'inc/none' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>
