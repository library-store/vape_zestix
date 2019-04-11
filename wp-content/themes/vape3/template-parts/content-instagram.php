<?php global $vape_options; ?>

<section class="home_section instagram">
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