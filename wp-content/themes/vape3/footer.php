<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vape3
 */

?>
	</div><!-- #content -->

	<footer style="background: #252525; text-align: center; color: #fff; padding-top: 20px;">
        <div style="margin-bottom: 40px;">
            <div style="font-size: 32px; font-family: GillSansMT_B;">FOLLOW US</div>
            <div class="socials">
                <a href="#"><span class="instagram">Instagram</span></a>
                <a href="#"><span class="facebook">Facebook</span></a>
                <a href="#"><span class="twitter">Twitter</span></a>
                <a href="#"><span class="watchsapp">Watchsapp</span></a>
            </div>
        </div>
        <div style="font-size: 15px;">
            <div style="border-bottom: 1px dashed #fff; display: inline-block; padding-bottom: 5px; margin-bottom: 10px;">CA PROPOSITION 65</div>
            <div>
                <div>NOT FOR SALE FOR MINORS</div>
                <div>Warning : This product contains nicotine, a chemical known to the state of</div>
                <div>California to cause birth defects or other reproductive harm.</div>
            </div>
        </div>
        <div style="font-size: 16px; padding: 20px 0px;">
            @2019 by ZESTIX Eliquid
        </div>
	</footer><!-- footer -->

</div><!-- #page -->

<div id="popup">
    <div class="form-checkage">
        <div class="content">
            <div>
                <img class="header-logo" src="<?php echo get_field('logo', 'option'); ?>" alt="" style="width: 150px;">
                <div style="font-family: GillSansMT_B; border-bottom: 1px solid #fff; padding-bottom: 15px; margin-bottom: 10px; font-size: 30px;">Age Verification</div>
            </div>
            <div style="font-family: Homizio_B; font-size: 29px; text-decoration: underline;">
                Respondents who do not answer accurately are fully liable
                for their own decisions regardless of age.
            </div>
            <div>
                <span id="age-yes-btn" style="font-family: Homizio_B;">I’m 21 or Older</span>
                <a href="https://www.google.ca" target="_self"><span style="font-family: Homizio_B;">I’m under 21</span></a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Create our stylesheet
    var style = document.createElement('style');
    style.innerHTML =
        'img {' +
        'opacity: 1 !important;'
        '}';

    // Get the first script tag
    var ref = document.querySelector('script');

    // Insert our new styles before the first script tag
    ref.parentNode.insertBefore(style, ref);


    //////////////////////
    jQuery(document).ready(function ($) {
        var popupshowed = false;
        var popupshowed = localStorage.getItem("vape_zestix_popupshowed");

        if(!popupshowed){
            $('#popup').fadeIn();
            localStorage.setItem("vape_zestix_popupshowed", true);
        }

        $('#age-yes-btn').on('click', function(){
            $('#popup').fadeOut();
        });

        $('.buton-menu-toggle').on('click', function(){
            $('#primary-menu').slideToggle();
        });
    });
</script>

</body>
</html>
