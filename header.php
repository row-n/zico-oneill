<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

  </head>
  <body id="body" <?php body_class('body'); ?>>

    <header class="header">
    	<a class="header__brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>

    	<button type="button" class="header__trigger" id="trigger">
    		<span class="sr-only">Toggle navigation</span>
    		<span class="header__trigger__line header__trigger__line--1"></span>
        <span class="header__trigger__line header__trigger__line--2"></span>
        <span class="header__trigger__line header__trigger__line--3"></span>
    	</button>
    </header>

    <aside class="sidebar" id="sidebar">
  		<?php get_sidebar(); ?>
  	</aside>

    <main class="main" role="main">
