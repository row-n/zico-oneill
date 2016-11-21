<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package zicooneill
 */
?>


      <div class="footer-menu">
        <?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

        <?php endif; // end sidebar widget area ?>
      </div>

      <footer class="footer text-left small">
          <p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
      </footer>

    </div> <!-- /main-container -->

    <?php wp_footer(); ?>

</body>
</html>

