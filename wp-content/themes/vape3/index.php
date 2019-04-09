<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vape3
 */

get_header();
?>

<?php global $vape_options; ?>
<div id="slideshow">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php foreach (get_field('slide_image', 'option') as $opt) { ?>
                <div class="swiper-slide"><a href="<?php echo $opt['url']; ?>"><img src="<?php echo $opt['image']; ?>" alt="<?php echo $opt['title']; ?>"></a></div>
            <?php } ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        speed: 1000,
        autoplay: 4000,
        autoplayDisableOnInteraction: false,
        loop: true,
    });
</script>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
