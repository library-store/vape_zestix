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

<main id="main" class="site-main">
    <section class="home_product home_section">
        <div class="header">
            Zestix Salt
        </div>

        <div class="products">
            <div class="product">
                <a href="#"><img src="http://danixvapors.com/wp-content/uploads/da1.png" alt="title" class="p_image"></a>
                <h3 class="name"><a href="#">Apple Iced</a></h3>
                <div class="more">
                    <a href="#">View More</a>
                </div>
            </div>
            <div class="product">
                <a href="#"><img src="http://danixvapors.com/wp-content/uploads/da1.png" alt="title" class="p_image"></a>
                <h3 class="name"><a href="#">Apple Iced</a></h3>
                <div class="more">
                    <a href="#">View More</a>
                </div>
            </div>
            <div class="product">
                <a href="#"><img src="http://danixvapors.com/wp-content/uploads/da1.png" alt="title" class="p_image"></a>
                <h3 class="name"><a href="#">Apple Iced</a></h3>
                <div class="more">
                    <a href="#">View More</a>
                </div>
            </div>
            <div class="product">
                <a href="#"><img src="http://danixvapors.com/wp-content/uploads/da1.png" alt="title" class="p_image"></a>
                <h3 class="name"><a href="#">Apple Iced</a></h3>
                <div class="more">
                    <a href="#">View More</a>
                </div>
            </div>
            <div class="product">
                <a href="#"><img src="http://danixvapors.com/wp-content/uploads/da1.png" alt="title" class="p_image"></a>
                <h3 class="name"><a href="#">Apple Iced</a></h3>
                <div class="more">
                    <a href="#">View More</a>
                </div>
            </div>
            <div class="product">
                <a href="#"><img src="http://danixvapors.com/wp-content/uploads/da1.png" alt="title" class="p_image"></a>
                <h3 class="name"><a href="#">Apple Iced</a></h3>
                <div class="more">
                    <a href="#">View More</a>
                </div>
            </div>
            <div class="product">
                <a href="#"><img src="http://danixvapors.com/wp-content/uploads/da1.png" alt="title" class="p_image"></a>
                <h3 class="name"><a href="#">Apple Iced</a></h3>
                <div class="more">
                    <a href="#">View More</a>
                </div>
            </div>
            <div class="product">
                <a href="#"><img src="http://danixvapors.com/wp-content/uploads/da1.png" alt="title" class="p_image"></a>
                <h3 class="name"><a href="#">Apple Iced</a></h3>
                <div class="more">
                    <a href="#">View More</a>
                </div>
            </div>
            <div class="product">
                <a href="#"><img src="http://danixvapors.com/wp-content/uploads/da1.png" alt="title" class="p_image"></a>
                <h3 class="name"><a href="#">Apple Iced</a></h3>
                <div class="more">
                    <a href="#">View More</a>
                </div>
            </div>
            <div class="product">
                <a href="#"><img src="http://danixvapors.com/wp-content/uploads/da1.png" alt="title" class="p_image"></a>
                <h3 class="name"><a href="#">Apple Iced</a></h3>
                <div class="more">
                    <a href="#">View More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home_section">
        <div class="header">
            Zestix Of Us
        </div>
        <div style="text-align: center; width: 720px; margin: auto; padding: 20px 0px; font-size: 16px;">
            ZESTIX WAS CREATED TO BRING YOU ALL THE BOLDEST, ALL THE WILDEST FLAVOURS.
            YOU CAN’T JUST EXPERIENCE ONE, YOU GOTTA HAVE ‘EM ALL!"
        </div>
    </section>

    <section class="home_section">
        <div class="header">
            #Zestix on instagram
        </div>

        <div id="slideshow_instagram">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach (get_field('instagram_images', 'option') as $opt) { ?>
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
            var swiper = new Swiper('#slideshow_instagram .swiper-container', {
                slidesPerView: 4,
                slidesPerGroup: 1,
                spaceBetween: 30,
                pagination: '.swiper-pagination',
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                paginationClickable: true,
                speed: 1000,
                autoplay: 4000,
                autoplayDisableOnInteraction: false,
                loop: true,
            });
        </script>

    </section>
</main><!-- #main -->

<?php
get_footer();
