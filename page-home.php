<?php
/**
 Template Name: Home
 * The template for displaying all pages.
 *
 * @package zicooneill
 */

get_header(); ?>

  <aside class="aside">
    <?php get_sidebar(); ?>
  </aside>

  <main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'page' ); ?>

      <div class="gallery-listing">
      <?php
        $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'menu_order' ) );
        foreach( $mypages as $page ) {
          $content = $page->post_content;
          $thumbnail = get_the_post_thumbnail( $page->ID );

          $galleries = get_post_galleries_images( $page );

          foreach( $galleries as $gallery ) {

            if ( $thumbnail ) { ?>
              <div class="gallery-list-item thumb-item">
                <a href="<?php echo get_page_link( $page->ID ); ?>" class="thumb">
                  <?php echo $thumbnail ?>
                </a>
                <div class="thumb-heading">
                  <a href="<?php echo get_page_link( $page->ID ); ?>">
                    <p><strong><?php echo $page->post_title; ?></strong></p>
                    <p>images <?php echo count($gallery) ?></p>
                  </a>
                </div>
              </div>
            <?php }
          }
        }
      ?>
      </div>

    <?php endwhile; // end of the loop. ?>

  </main><!-- #main -->

<?php get_footer(); ?>
