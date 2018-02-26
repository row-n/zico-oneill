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

						$gallery = get_post_gallery( $projects, false );
						$attachments = $gallery_attachment_ids = explode( ',', $gallery['ids'] );

						if ( $project_thumbnail ) { ?>
							<li class="gallery-list__item">
								<a href="<?php echo get_page_link( $projects->ID ); ?>" class="gallery-list__link">
									<div class="gallery-list__thumb">
										<?php echo $project_thumbnail ?>
									</div>
									<p class="gallery-list__title"><strong><?php echo $projects->post_title; ?></strong></p>
									<p class="gallery-list__info">Series of <?php echo count( $attachments ); ?></p>
								</a>
							</li>
						<?php }
					}
				?>
			</ul>
				<?php
					}

					$workpages = get_pages( array( 'child_of' => 284, 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ) );
					if( count( $workpages ) != 0 ) {
				?>
				<ul class="gallery-list gallery-list--3" id="gallery-works">
				<?php
					foreach( $workpages as $works ) {
						$content = $works->post_content;
						$work_ID = $works->ID;
						$work_thumbnail = get_the_post_thumbnail( $work_ID, $size = 'medium' );

						$gallery = get_post_gallery( $projects, false );
						$attachments = $gallery_attachment_ids = explode( ',', $gallery['ids'] );

						if ( $work_thumbnail ) { ?>
							<li class="gallery-list__item">
								<a href="<?php echo get_page_link( $works->ID ); ?>" class="gallery-list__link">
									<div class="gallery-list__thumb">
										<?php echo $work_thumbnail ?>
									</div>
									<p class="gallery-list__title"><strong><?php echo $works->post_title; ?></strong></p>
									<p class="gallery-list__info">Series of <?php echo count( $attachments ); ?></p>
								</a>
							</li>
						<?php }
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
