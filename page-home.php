<?php
/* Template Name: Home */
?>

<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('page--home'); ?>>
				<?php
					$projectpages = get_pages( array( 'child_of' => 155, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ) );
					if( count( $projectpages ) != 0 ) {
				?>
				<ul class="gallery-list gallery-list--3" id="gallery-projects">
				<?php
					foreach( $projectpages as $projects ) {
						$content = $projects->post_content;
						$project_ID = $projects->ID;
						$project_thumbnail = get_the_post_thumbnail( $project_ID, $size = 'medium' );

						$project_gallery = get_post_galleries_images( $projects );

						foreach( $project_gallery as $project_item ) {

							if ( $project_thumbnail ) { ?>
								<li class="gallery-list__item">
									<a href="<?php echo get_page_link( $projects->ID ); ?>" class="gallery-list__link">
										<div class="gallery-list__thumb">
											<?php echo $project_thumbnail ?>
										</div>
										<p class="gallery-list__title"><strong><?php echo $projects->post_title; ?></strong></p>
										<p class="gallery-list__info">images <?php echo count($project_item) ?></p>
									</a>
								</li>
							<?php }
						}
					}
				?>
			</ul>
				<?php
					}

					$portfoliopages = get_pages( array( 'child_of' => 284, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ) );
					if( count( $portfoliopages ) != 0 ) {
				?>
				<ul class="gallery-list gallery-list--3" id="gallery-portfolios">
				<?php
					foreach( $portfoliopages as $portfolios ) {
						$content = $portfolios->post_content;
						$portfolio_ID = $portfolios->ID;
						$portfolio_thumbnail = get_the_post_thumbnail( $portfolio_ID, $size = 'medium' );

						$portfolio_gallery = get_post_galleries_images( $portfolios );

						foreach( $portfolio_gallery as $portfolio_item ) {

							if ( $portfolio_thumbnail ) { ?>
								<li class="gallery-list__item">
									<a href="<?php echo get_page_link( $portfolios->ID ); ?>" class="gallery-list__link">
										<div class="gallery-list__thumb">
											<?php echo $portfolio_thumbnail ?>
										</div>
										<p class="gallery-list__title"><strong><?php echo $portfolios->post_title; ?></strong></p>
										<p class="gallery-list__info">images <?php echo count($portfolio_item) ?></p>
									</a>
								</li>
							<?php }
						}
					}
				?>
			</ul>
				<?php
					}
				?>
			</article>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>
