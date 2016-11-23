<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package zicooneill
 */
?>

	<nav class="navbar" role="navigation">

			<a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>

			<!-- Brand and toggle get grouped for better mobile display -->

			<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<!-- <span class="icon-bar"></span>
							<span class="icon-bar"></span> -->
					</button>
			</div>

	</nav>

	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'zicooneill' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'zicooneill' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php endif; // end sidebar widget area ?>

		<div class="footer-menu">
			<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

			<?php endif; // end sidebar widget area ?>
		</div>

	</div><!-- #secondary -->

	<footer class="footer text-left small">
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
	</footer>
