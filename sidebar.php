<nav id="primary-navigation" class="navigation navigation--main" role="navigation">
	<?php dynamic_sidebar('sidebar_menu'); ?>
</nav>

<div id="secondary-navigation" class="navigation navigation--social" role="complementary">
	<?php dynamic_sidebar('social_menu'); ?>
</div>

<footer class="footer">
	<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
</footer>
