<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package zicooneill
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/img/favicon.ico"> -->
<link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/zico-theme/assets/img/icons/favicon-57.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/wp-content/themes/zico-theme/assets/img/icons/favicon-57.png">
<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/zico-theme/assets/img/icons/favicon-72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/zico-theme/assets/img/icons/favicon-114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/zico-theme/assets/img/icons/favicon-120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/zico-theme/assets/img/icons/favicon-144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/zico-theme/assets/img/icons/favicon-152.png">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

<script>
    var windowHeight = $w.height() - 135;
    $('.slideshow-container, .thumbnail-container, .loader, .aside').css({'height': windowHeight});
</script>

</head>

<body <?php body_class(); ?>>

    <div class="collapse navbar-collapse clearfix" id="navbar-collapse">
        <?php dynamic_sidebar( 'Menu' ); ?>
    </div>

    <div class="main-container">

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
