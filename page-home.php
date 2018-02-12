<?php
/* Template Name: Home */
?>

<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('page--home'); ?>>
				<?php
					$workpages = get_pages( array( 'child_of' => 768, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ) );
					if( count( $workpages ) != 0 ) {
				?>
				<ul class="gallery-list gallery-list--3" id="gallery-works">
				<?php
					foreach( $workpages as $works ) {
						$content = $works->post_content;
						$work_ID = $workss->ID;
						$work_thumbnail = get_the_post_thumbnail( $work_ID, $size = 'medium' );

						$work_gallery = get_post_galleries_images( $works );

						foreach( $work_gallery as $work_item ) {

							if ( $work_thumbnail ) { ?>
								<li class="gallery-list__item">
									<figure>
										<a href="<?php echo get_page_link( $works->ID ); ?>" class="gallery-list__link">
											<div class="gallery-list__thumb">
												<?php echo $work_thumbnail ?>
											</div>
											<figcaption>
												<p class="gallery-list__title"><strong><?php echo $works->post_title; ?></strong></p>
												<p class="gallery-list__info">images <?php echo count($work_item) ?></p>
											</figcaption>
										</a>
									</figure>
								</li>
							<?php }
						}
					}
				?>
			</ul>
				<?php
					}

					$projectpages = get_pages( array( 'child_of' => 763, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ) );
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
									<figure>
										<a href="<?php echo get_page_link( $projects->ID ); ?>" class="gallery-list__link">
											<div class="gallery-list__thumb">
												<?php echo $project_thumbnail ?>
											</div>
											<figcaption>
												<p class="gallery-list__title"><strong><?php echo $projects->post_title; ?></strong></p>
												<p class="gallery-list__info">images <?php echo count($project_item) ?></p>
											</figcaption>
										</a>
									</figure>
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
