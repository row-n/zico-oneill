<?php get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<strong><?php printf( __( 'Search Results for: %s', 'zicooneill' ), '<span>' . get_search_query() . '</span>' ); ?></strong>

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('page--search'); ?>>
					<?php the_title( sprintf( '<strong><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></strong>' ); ?>

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>

				<footer class="entry-footer">

					<?php get_template_part('inc/meta'); ?>

					<?php if ( 'post' == get_post_type() ) : ?>
						<?php
							$categories_list = get_the_category_list( __( ', ', 'zicooneill' ) );
							if ( $categories_list && zicooneill_categorized_blog() ) :
						?>
						<span class="cat-links">
							<?php printf( __( 'Posted in %1$s', 'zicooneill' ), $categories_list ); ?>
						</span>
						<?php endif; ?>

						<?php
							$tags_list = get_the_tag_list( '', __( ', ', 'zicooneill' ) );
							if ( $tags_list ) :
						?>
						<span class="tags-links">
							<?php printf( __( 'Tagged %1$s', 'zicooneill' ), $tags_list ); ?>
						</span>
						<?php endif; ?>
					<?php endif; ?>

					<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'zicooneill' ), __( '1 Comment', 'zicooneill' ), __( '% Comments', 'zicooneill' ) ); ?></span>
					<?php endif; ?>

				</footer>
			</article>

		<?php endwhile; ?>

		<?php get_template_part('inc/pagination'); ?>

	<?php else : ?>

		<?php get_template_part( 'inc/none' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>
