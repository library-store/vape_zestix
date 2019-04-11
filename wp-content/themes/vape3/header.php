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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<?php wp_head(); ?>

    <script>
        /**
         * Created by TA-MEDIA on 12/3/2017.
         */
        function detectmob() {
            if( navigator.userAgent.match(/Android/i)
                || navigator.userAgent.match(/webOS/i)
                || navigator.userAgent.match(/iPhone/i)
                || navigator.userAgent.match(/iPad/i)
                || navigator.userAgent.match(/iPod/i)
                || navigator.userAgent.match(/BlackBerry/i)
                || navigator.userAgent.match(/Windows Phone/i)
            ){
                return true;
            }
            else {
                return false;
            }
        }
    </script>

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

            <div class="menu-container">
                <div class="buton-menu-toggle">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    ) );
                    ?>
                </nav><!-- #site-navigation -->
            </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
