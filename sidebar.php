<nav id="menu" class="menu" role="navigation">
	<?php main_nav(); ?>
</nav>

<div id="secondary" class="social" role="complementary">
	<?php dynamic_sidebar('social_menu'); ?>
</div>

<footer class="footer text-left small hidden-xs hidden-sm">
		<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
</footer>
