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
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,700" rel="stylesheet">

    <?php wp_head(); ?>

    <!-- Google Analytics -->
    <script>
      window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
      ga('create', 'UA-31956531-2', 'auto');
      ga('send', 'pageview');
    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->

  </head>
  <body id="body" <?php body_class('body'); ?>>

    <header class="header">
    	<a class="header__brand" href="<?php bloginfo( 'url' ); ?>">
        <svg name="<?php bloginfo( 'name' ); ?>" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 543.3 134.5" xml:space="preserve">
          <g class="name">
            <path d="M44.1,81.8v9.9h-44L0,82.2l31.6-37.4H0v-9.9h44.1L44,44.2L12.8,81.8H44.1z"/>
            <rect x="61.3" y="35.2" width="11.1" height="56.8"/>
            <path d="M136.7,82.7c-3.1,3.1-10.5,10.6-22.9,10.6c-14.2,0-28.7-9.9-28.7-29.6c0-20.9,15.9-30.3,28.7-30.3c10.3,0,17,4.8,20.8,8.4
          		l-6.1,7.9c-2.7-2.6-7.5-5.9-14.1-5.9c-10.8,0-18.5,9.2-18.5,20c0,10.5,7.4,19.2,18.5,19.2c7.9,0,12.8-5.2,15-7.6L136.7,82.7z"/>
            <path d="M205.4,63.3c0,16.5-13.9,30-30.5,30c-16.4,0-30.4-13.4-30.4-30s13.9-30,30.4-30C191.4,33.3,205.4,46.8,205.4,63.3z
          		 M155.7,63.3c0,10.8,8.5,19.6,19.2,19.6c10.7,0,19.2-8.8,19.2-19.6c0-10.8-8.5-19.6-19.2-19.6C164.2,43.7,155.7,52.4,155.7,63.3z"
          		/>
            <path d="M309.7,63.3c0,16.5-13.9,30-30.5,30c-16.4,0-30.4-13.4-30.4-30s13.9-30,30.4-30C295.8,33.3,309.7,46.8,309.7,63.3z
          		 M260,63.3c0,10.8,8.5,19.6,19.2,19.6c10.7,0,19.2-8.8,19.2-19.6c0-10.8-8.5-19.6-19.2-19.6C268.6,43.7,260,52.4,260,63.3z"/>
            <path d="M349.8,41.7c3-4.8,8.9-8.4,15.8-8.4c11.8,0,21.3,4.9,21.3,26.3v32h-11v-32c0-11.8-5.6-16-12.7-16c-6.5,0-13.4,5.3-13.4,16
          		v32h-11V34.9h11V41.7z"/>
            <path d="M456.2,79.2c-4.1,8.1-12.9,14.1-24.8,14.1c-14.2,0-29.6-10.3-29.6-30s14.2-30,27.1-30c16.7,0,27.2,11.1,27.2,29.7
          		c0,0.1,0,1.8-0.3,3h-43.3c0.5,9.9,8.3,17.4,19,17.4c7.7,0,13.4-3.6,15.9-8.5L456.2,79.2z M445.5,57c-0.4-7.1-6.5-13.8-16.1-13.8
          		c-8.3,0-14.9,6.1-16.3,13.8H445.5z"/>
            <rect x="470.7" y="34.9" width="11.1" height="56.8"/>
            <path d="M501.3,91.7V0h11.1v91.7H501.3z"/>
          	<path d="M532.2,91.7V0h11.1v91.7H532.2z"/>
          </g>
          <g class="dots">
          	<path d="M59.1,121.1c0-4.4,3.5-8,7.7-8c4.4,0,7.9,3.6,7.9,8c0,4.3-3.5,7.7-7.9,7.7C62.6,128.9,59.1,125.4,59.1,121.1z"/>
          	<path d="M326.1,8.2c0,4.4-3.5,8-7.7,8c-4.4,0-7.9-3.6-7.9-8c0-4.3,3.5-7.7,7.9-7.7C322.7,0.5,326.1,4,326.1,8.2z"/>
            <path d="M484,7.8c0,4.4-3.5,8-7.7,8c-4.4,0-7.9-3.6-7.9-8c0-4.3,3.5-7.7,7.9-7.7C480.5,0,484,3.5,484,7.8z"/>
          </g>
        </svg>
      </a>

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
