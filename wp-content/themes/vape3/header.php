<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vape3
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

    <link rel="stylesheet" href="http://danixvapors.com/wp-content/themes/vape/js/swiper/swiper.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/swiper/swiper.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div id="top">
        WARNING: THIS PRODUCT CONTAINS NICOTINE. NICOTINE IS AN ADDICTIVE CHEMICAL.
    </div>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vape3' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container flex-box">
            <div class="site-branding">
                <a href="<?php echo get_home_url(); ?>">
                    <img class="header-logo" src="<?php echo get_field('logo', 'option'); ?>" alt="">
                </a>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'vape3' ); ?></button>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            </nav><!-- #site-navigation -->
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
