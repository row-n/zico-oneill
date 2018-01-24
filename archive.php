<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<strong>
			<?php
				if ( is_category() ) :
					single_cat_title();

				elseif ( is_tag() ) :
					single_tag_title();

				elseif ( is_author() ) :
					printf( __( 'Author: %s', 'zicooneill' ), '<span class="vcard">' . get_the_author() . '</span>' );

				elseif ( is_day() ) :
					printf( __( 'Day: %s', 'zicooneill' ), '<span>' . get_the_date() . '</span>' );

				elseif ( is_month() ) :
					printf( __( 'Month: %s', 'zicooneill' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'zicooneill' ) ) . '</span>' );

				elseif ( is_year() ) :
					printf( __( 'Year: %s', 'zicooneill' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'zicooneill' ) ) . '</span>' );

				else :
					_e( 'Archives', 'zicooneill' );

				endif;
			?>
		</strong>
		<?php
			// Show an optional term description.
			$term_description = term_description();
			if ( ! empty( $term_description ) ) :
				printf( '<div class="taxonomy-description">%s</div>', $term_description );
			endif;
		?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php get_template_part('inc/meta'); ?>

		<?php endwhile; ?>

		<?php get_template_part('inc/pagination'); ?>

	<?php else : ?>

		<?php get_template_part( 'inc/none' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>
