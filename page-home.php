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

      <div class="row">
      <?php
        $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
        foreach( $mypages as $page ) {
          $content = $page->post_content;
          $thumbnail = get_the_post_thumbnail( $page->ID );

          $images = $page->get_children( array(
              'post_parent' => $post->ID,
              'post_type' => 'attachment',
              'post_mime_type' => 'image',
              'orderby' => 'menu_order',
              'order' => 'ASC',
              'numberposts' => 999
          ));
          if ( $images ) {
              $total_images = count( $images );
              echo $total_images;
          }

          // echo '<pre>'.print_r($page).'</pre>';

          if ( $thumbnail ) { ?>
          <div class="col-md-4">
            <a href="<?php echo get_page_link( $page->ID ); ?>">
              <?php echo $thumbnail ?>
              <p><strong><?php echo $page->post_title; ?></strong></p>
            </a>
          </div>
        <?php }
      } ?>
      </div>

    <?php endwhile; // end of the loop. ?>

  </main><!-- #main -->

<?php get_footer(); ?>
