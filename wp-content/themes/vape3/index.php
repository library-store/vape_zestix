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

    <script>
        var swiper = new Swiper('#slideshow .swiper-container', {
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

<main id="main" class="site-main">
    <section class="home_product home_section">
        <div class="header">
            Zestix Salt
        </div>

        <div class="products flex-box">

            <?php if ( have_posts() ) : ?>

                <?php if ( is_home() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="product">
                        <a href="<?php echo get_permalink() ?>"><?php echo get_the_post_thumbnail(); ?></a>
                        <h3 class="name"><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h3>
                        <div class="more">
                            <a href="<?php echo get_permalink() ?>">View More</a>
                        </div>
                    </div>
                    <?php endwhile; ?>

                <?php endif; ?>

            <?php endif; ?>

        </div>
    </section>

    <section class="home_section about">
        <div class="header">
            Zestix Of Us
        </div>
        <div style="text-align: center; width: 720px; margin: auto; padding: 20px 0px; font-size: 16px;">
            ZESTIX WAS CREATED TO BRING YOU ALL THE BOLDEST, ALL THE WILDEST FLAVOURS.
            YOU CAN’T JUST EXPERIENCE ONE, YOU GOTTA HAVE ‘EM ALL!"
        </div>
    </section>

    <?php get_template_part( 'template-parts/content', 'instagram' ); ?>
</main><!-- #main -->

<?php
get_footer();
