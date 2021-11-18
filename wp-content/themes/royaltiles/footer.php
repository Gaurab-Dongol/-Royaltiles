<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RoyalTiles
 */

?>

<footer id="colophon" class="site-footer wow animate__fadeInUp">
    <div class="site-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="foot-logo">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /> </a>
                    </div><!-- foot-logo -->
                    <div class="foot-list-wrap">
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>Showroom: 255 Parramatta Rd,Auburn
                                NSW 2144</li>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>Warehouse: 32 Parramatta Rd, Lidcombe
                                NSW 2141</li>
                            <li><a href="tel:(02) 9748 0885"><i class="fa fa-phone" aria-hidden="true"></i> (02) 9748
                                    0885</a></li>
                            <li><a href="info@royaltiles.com.au"><i class="fa fa-envelope"></i>
                                    info@royaltiles.com.au</a></li>
                        </ul>
                    </div><!-- foot-list-wrap -->
                </div><!-- col -->

                <div class="col-md-6 col-lg-3">
                    <div class="foot-list-wrap">
                        <h3>schedule</h3>
                        <ul>
                            <li>Monday - Friday: 8am - 5pm</li>
                            <li>Saturday: 9am - 4pm</li>
                            <li>Sunday: 10am - 4pm</li>
                        </ul>
                    </div><!-- foot-location-wrap -->
                </div><!-- col -->
                <div class="col-md-6 col-lg-3">
                    <div class="foot-list-wrap">
                        <h3>Information</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div><!-- foot-location-wrap -->
                </div><!-- col -->

                <div class="col-md-6 col-lg-3">
                    <div class="foot-list-wrap">
                        <h3>Products</h3>
                        <ul>
                            <li><a href="#">Tiles</a></li>
                            <li><a href="#">Grouts & Glues</a></li>
                            <li><a href="#">Tools & Accessories</a></li>
                            <li><a href="#">Sealers & Waterproofing</a></li>
                        </ul>
                    </div><!-- foot-location-wrap -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="paypal">
                <img src="<?php echo get_template_directory_uri(); ?>/images/card-icons.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/paypal-icon.png" />
                <img src="<?php echo get_template_directory_uri(); ?>/images/afterpay-icon.png" />


            </div><!-- paypal -->
            </section><!-- container -->
        </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>