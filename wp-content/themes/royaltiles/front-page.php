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
 * @package royaltiles
 */

get_header();

?>



<section class="hero-banner">
    <div class="hero-slider wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
        <?php
        $args = array('post_type' => 'dynamic_slider');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
        ?>
        <div class="item">
            <?php the_post_thumbnail(); ?>
        </div>
        <?php
        endwhile;
        ?>

    </div>
    <div class="link-box">
        <a class="wow slideInDown" data-wow-duration="1.2s" data-wow-delay="1.2s" href="#">Shop Now<span>></span></a>
    </div>
    <!-- link-box -->
</section>
<!-- end of hero banner -->

<section class="shop-category">
    <div class="container">
        <div class="title-head wow animate__fadeInUp">
            <div class="line-sep"></div>
            <!-- line-sep -->
            <h2>Shop by</h2>
            <div class="line-sep"></div>
            <!-- line-sep -->
        </div>
        <!-- title-head -->
        <div class="row">
            <div class="col-md-6 col-lg-4 wow animate__fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="shop-meta-wrap">
                    <a href="#"> <img
                            src="<?php echo get_template_directory_uri(); ?>/images/Color-Control-of-Ceramic-Tiles.jpg"
                            alt="" /></a>
                    <div class="shop-meta-overlay">
                        <a href="#">Shop All</a>
                    </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->
            <div class="col-md-6 col-lg-4 wow animate__fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
                <div class="shop-meta-wrap">
                    <a href="#"> <img
                            src="<?php echo get_template_directory_uri(); ?>/images/ceramic-tiles-1000x1000.jpeg"
                            alt="" /></a>
                    <div class="shop-meta-overlay">
                        <a href="#">Shop Color</a>
                    </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->
            <div class="col-md-6 col-lg-4 wow animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
                <div class="shop-meta-wrap">
                    <a href="#"> <img
                            src="<?php echo get_template_directory_uri(); ?>/images/6db232317d3b75fccee001c45ff2275c.jpg"
                            alt="" /></a>
                    <div class="shop-meta-overlay">
                        <a href="#">Shop Shape</a>
                    </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->

            <div class="col-md-6 col-lg-4 wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                <div class="shop-meta-wrap">
                    <a href="#"> <img
                            src="<?php echo get_template_directory_uri(); ?>/images/3baa07cae0380341e97109be7a537e33.jpg"
                            alt="" /></a>
                    <div class="shop-meta-overlay">
                        <a href="#">Shop Area</a>
                    </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->

            <div class="col-md-6 col-lg-4 wow animate__fadeInUp" data-wow-duration="1.2s" data-wow-delay="1.2s">
                <div class="shop-meta-wrap">
                    <a href="#"> <img
                            src="<?php echo get_template_directory_uri(); ?>/images/marazzi_crogiolo_d_segni_blend_005.jpg__360x258_q85_crop_subsampling-2.jpg"
                            alt="" /></a>
                    <div class="shop-meta-overlay">
                        <a href="#">Shop Pattern</a>
                    </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->

            <div class="col-md-6 col-lg-4 wow animate__fadeInUp" data-wow-duration="1.4s" data-wow-delay="1.4s">
                <div class="shop-meta-wrap">
                    <a href="#"> <img
                            src="<?php echo get_template_directory_uri(); ?>/images/82448740-various-ceramic-tiles-samples.jpg"
                            alt="" /></a>
                    <div class="shop-meta-overlay">
                        <a href="#">Shop Looks</a>
                    </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->
            </row><!-- row -->
        </div>
    </div><!-- container -->
</section>
<!-- end of shop-category -->

<section class="product-slider-wrap">
    <div class="container">
        <div class="product-slider">
            <div class="item wow animate__backInUp" data-wow-duration="0.2s" data-wow-delay="0.2s">
                <p>Aussie made</p>
                <a href="#"> <img
                        src="<?php echo get_template_directory_uri(); ?>/images/cement-tiles-encaustic-greek-terazzo-600w-1717604935.jpg"
                        alt="" />
                    <div class="product-details">
                        <div class="detail-author">
                            <span>Navy</span>
                            <span>Encaustic</span>
                            <span>300 x 300</span>
                        </div><!-- detail-author -->
                        <div class="author-price">
                            <h3>$40</h3>
                        </div><!-- author-price -->
                    </div><!-- product-details -->
                    <p class="single-product-detail">See Range</p>
                </a>
            </div><!-- item -->
            <div class="item wow animate__backInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <p>Aussie made</p>
                <a href="#"> <img
                        src="<?php echo get_template_directory_uri(); ?>/images/handmade-encaustic-tulips-blue-fleur-cement-tiles-2.jpg"
                        alt="" />
                    <div class="product-details">
                        <div class="detail-author">
                            <span>Navy</span>
                            <span>Encaustic</span>
                            <span>300 x 300</span>
                        </div><!-- detail-author -->
                        <div class="author-price">
                            <h3>$40</h3>
                        </div><!-- author-price -->
                    </div><!-- product-details -->
                    <p class="single-product-detail">See Range</p>
                </a>
            </div><!-- item -->
            <div class="item wow animate__backInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
                <p>Aussie made</p>
                <a href="#"> <img
                        src="<?php echo get_template_directory_uri(); ?>/images/paris-comedie-porcelain-tile.jpg"
                        alt="" />
                    <div class="product-details">
                        <div class="detail-author">
                            <span>Navy</span>
                            <span>Encaustic</span>
                            <span>300 x 300</span>
                        </div><!-- detail-author -->
                        <div class="author-price">
                            <h3>$40</h3>
                        </div><!-- author-price -->
                    </div><!-- product-details -->
                    <p class="single-product-detail">See Range</p>
                </a>
            </div><!-- item -->
            <div class="item wow animate__backInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
                <p>Aussie made</p>
                <a href="#"> <img
                        src="<?php echo get_template_directory_uri(); ?>/images/istockphoto-545805508-612x612.jpg"
                        alt="" />
                    <div class="product-details">
                        <div class="detail-author">
                            <span>Navy</span>
                            <span>Encaustic</span>
                            <span>300 x 300</span>
                        </div><!-- detail-author -->
                        <div class="author-price">
                            <h3>$40</h3>
                        </div><!-- author-price -->
                    </div><!-- product-details -->
                    <p class="single-product-detail">See Range</p>
                </a>
            </div><!-- item -->
            <div class="item wow animate__backInUp" data-wow-duration="1s" data-wow-delay="1s">
                <p>Aussie made</p>
                <a href="#"> <img
                        src="<?php echo get_template_directory_uri(); ?>/images/paris-comedie-porcelain-tile.jpg"
                        alt="" />
                    <div class="product-details">
                        <div class="detail-author">
                            <span>Navy</span>
                            <span>Encaustic</span>
                            <span>300 x 300</span>
                        </div><!-- detail-author -->
                        <div class="author-price">
                            <h3>$40</h3>
                        </div><!-- author-price -->
                    </div><!-- product-details -->
                    <p class="single-product-detail">See Range</p>
                </a>
            </div><!-- item -->


        </div><!-- product-slider -->
    </div><!-- container -->
</section>
<!-- end of product-slider-wrap -->

<section class="trending-section">
    <div class="container">
        <div class="title-head">
            <div class="line-sep"></div>
            <!-- line-sep -->
            <h2>Trending products</h2>
            <div class="line-sep"></div>
            <!-- line-sep -->
        </div>
        <!-- title-head -->
        <div class="row">
            <div class="col-md-6">
                <div class="trending-left-img wow slideInLeft trending-slide">
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/image-map-1-570x715.jpg"
                            class="svg" />
                    </div><!-- item -->
                    <div class="item">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/images/7c76667f2d4caaedf200faeb77ea024a.jpg" />
                    </div><!-- item -->
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/5d4e8183043bfd00010e07d6.jpg" />
                    </div><!-- item -->
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/1-At-Caesarea.jpg" />
                    </div><!-- item -->

                </div>
                <!-- trending-left-img -->
            </div>
            <!-- col -->
            <div class="col-md-6">
                <div class="row for-desktop-layout">
                    <div class="col-md-6 wow slideInLeft">
                        <div class="right-grid-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-15-270x280.png"
                                class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Royal 1</h5>
                            <p>
                                <span>$400.00 $500.00</span>
                                $500.00
                            </p>
                        </div>
                        <!-- portfolio-content -->
                    </div>
                    <!-- col -->
                    <div class="col-md-6 wow slideInRight">
                        <div class="right-grid-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-16-270x280.png"
                                class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Royal 2</h5>
                            <p>$500.00</p>
                        </div>
                        <!-- portfolio-content -->
                    </div>
                    <!-- col -->
                    <div class="col-md-6 wow slideInLeft">
                        <div class="right-grid-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-17-270x280.png"
                                class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Royal 3</h5>
                            <p>$500.00</p>
                        </div>
                        <!-- portfolio-content -->
                    </div>
                    <!-- col -->
                    <div class="col-md-6 wow slideInRight">
                        <div class="right-grid-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-15-270x280.png"
                                class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Royal 4</h5>
                            <p>$500.00</p>
                        </div>
                        <!-- portfolio-content -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->

                <!-- For responsive -->
                <div class="responsive-trending-slide">
                    <div class="item">
                        <div class="right-grid-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-15-270x280.png"
                                class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Royal 1</h5>
                            <p>
                                <span>$400.00 $500.00</span>
                                $500.00
                            </p>
                        </div>
                        <!-- portfolio-content -->
                    </div><!-- item -->

                    <div class="item">
                        <div class="right-grid-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-16-270x280.png"
                                class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Royal 2</h5>
                            <p>$500.00</p>
                        </div>
                        <!-- portfolio-content -->
                    </div>
                    <!-- item -->

                    <div class="item">
                        <div class="right-grid-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-17-270x280.png"
                                class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Royal 3</h5>
                            <p>$500.00</p>
                        </div>
                        <!-- portfolio-content -->
                    </div>
                    <!-- item -->

                    <div class="item">
                        <div class="right-grid-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-15-270x280.png"
                                class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Royal 4</h5>
                            <p>$500.00</p>
                        </div>
                        <!-- portfolio-content -->
                    </div>
                    <!-- item -->
                </div><!-- responsive-trending-slide -->

                <div class="common-link">
                    <a href="#">SHOW ALL PRODUCTS</a>
                </div>
                <!-- common-link -->
            </div>
            <!-- col -->
        </div>
        <!-- row -->


        <div class="icon-info-wrap">
            <div class="row">
                <div class="col-md-3 wow animate__fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="icon-info-blk">
                        <i class="fa fa-bus" aria-hidden="true"></i>
                        <p>FAST DELIVERY<span>Within 1-2 business days</span></p>
                    </div>
                    <!-- icon-info-blk -->
                </div>
                <div class="col-md-3 wow animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
                    <div class="icon-info-blk">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                        <p>TOP QUALITY<span>We only source from the best</span></p>
                    </div>
                    <!-- icon-info-blk -->
                </div>
                <div class="col-md-3 wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="icon-info-blk">
                        <i class="fa fa-money" aria-hidden="true"></i>
                        <p>BEST PRICES<span>Lowest prices and clearances</span></p>
                    </div>
                    <!-- icon-info-blk -->
                </div>
                <div class="col-md-3 wow animate__fadeInUp" data-wow-duration="1.2s" data-wow-delay="1.2s">
                    <div class="icon-info-blk">
                        <i class="fa fa-envira" aria-hidden="true"></i>
                        <p>ECO FRIENDLY IMPORTER<span>Preserving the environment</span></p>
                    </div>
                    <!-- icon-info-blk -->
                </div>
                <!-- col -->
            </div>
            <!-- row -->
        </div>
    </div>
    <!-- container -->
</section>
<!-- end of trending-section -->

<section class="product-lists">
    <div class="container">
        <div class="product-list-slide">
            <div class="item wow animate__fadeInLeft" data-wow-duration="0.2s" data-wow-delay="0.2s">
                <a href="#">
                    <div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/maxresdefault.jpg" />
                        <p class="single-product-detail">Feature Tiles</p>
                    </div><!-- product-single -->
                </a>
            </div><!-- item -->
            <div class="item wow animate__fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <a href="">
                    <div class="product-single">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/images/43c05f1189c02595b15223e22c9cc530.jpg" />
                        <p class="single-product-detail">Wall tiles</p>
                    </div><!-- product-single -->
                </a>
            </div><!-- item -->
            <div class="item wow animate__fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.8s">
                <a href="">
                    <div class="product-single">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/images/7c76667f2d4caaedf200faeb77ea024a.jpg" />
                        <p class="single-product-detail">Floor tiles</p>
                    </div><!-- product-single -->
                </a>
            </div><!-- item -->
            <div class="item wow animate__fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <a href="http://localhost/royaltiles/product-category/exclusive-tiles/">
                    <div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/5d4e8183043bfd00010e07d6.jpg" />
                        <p class="single-product-detail">Our Exclusive Tiles</p>
                    </div><!-- product-single -->
                </a>
            </div><!-- item -->
            <div class="item wow animate__fadeInUp" data-wow-duration="1.2s" data-wow-delay="1.2s">
                <a href="">
                    <div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tile-selection-living-room.jpg" />
                        <p class="single-product-detail">Our Exclusive Tiles</p>
                    </div><!-- product-single -->
                </a>
            </div><!-- item -->




        </div><!-- product-list-slider -->
    </div><!-- container -->
</section><!-- product-lists -->
<!-- end of product-list -->


<section class="attatchement-wallpaper">
    <div class="container">
        <div class="wallpaper-heading">
            <h3 class="wow animate__fadeInDown">
                GET NEW & AMAZING<br />
                TILES FROM US!
            </h3>
            <p class="wow animate__fadeInLeft">
                Coverur offers lots of great flooring solutions for home owners.
                Whether you prefer laminate or natural stone flooring, our experts
                can manufacture and install anything you like!
            </p>
        </div>
        <!-- wallpaper-heading -->
        <div class="common-link wow animate__fadeInUp">
            <a href="#">CLICK HERE</a>
        </div>
        <!-- common-link -->
    </div>
    <!-- container -->
</section>
<!-- end of attatchement-wallpaper -->

<section class="testimonial wow animate__fadeInRight">
    <div class="container">
        <div class="title-head">
            <div class="line-sep"></div>
            <!-- line-sep -->
            <h2>WHAT PEOPLE SAY</h2>
            <div class="line-sep"></div>
            <!-- line-sep -->
        </div>
        <!-- title-head -->

        <div class="tesimonial-slide">
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/user-16-100x100.jpg" />
                <p class="wow fadeInRightBig">Fantastic service from start to finish. After our ceiling collapsed we
                    never thought our damaged floor would look so good again. These guys worked in a tight time frame
                    and were very accommodating to the other trades working in the same area to produce brilliant
                    results and restore our badly damaged floor to look like new!</p>
                <h3 class="wow animate__fadeInUpBig">ANNA CARTER <span>Client</span></h3>
            </div>
            <!-- item -->
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/user-16-100x100.jpg" />
                <p>Fantastic service from start to finish. After our ceiling collapsed we never thought our damaged
                    floor would look so good again. These guys worked in a tight time frame and were very accommodating
                    to the other trades working in the same area to produce brilliant results and restore our badly
                    damaged floor to look like new!</p>
                <h3>ANNA CARTER <span>Client</span></h3>
            </div>
            <!-- item -->
        </div>
        <!-- testimonial-slide -->
    </div><!-- container -->
</section>
<!-- end of testimonial -->



<section class="grid-view-two-col">
    <div class="custom-row">
        <div class="col-grid-cus wow animate__fadeInLeft">
            <div class="left-col-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/7c76667f2d4caaedf200faeb77ea024a.jpg" />
            </div>
            <!-- left-col-img -->
        </div>
        <!-- col-grid-cus -->
        <div class="col-grid-cus wow animate__fadeInRight">
            <div class="right-col-detail">
                <h5 class="wow fadeIn" data-wow-duration="0.5" data-wow-delay="1s">
                    Natural Stones
                </h5>
                <h3 class="wow animate__fadeInDown" data-wow-duration="0.5" data-wow-delay="0.6s">
                    OUR TILES
                </h3>
                <p class="wow animate__fadeInUp" data-wow-duration="0.5" data-wow-delay="0.8s">
                    We have an extensive range of stock including natural stone tiles and pavers, stone wall cladding,
                    porcelain and ceramic tiles and an array of stunning decorative features and mosaics. Our
                    representatives are constantly sourcing tiles and stone from our large portfolio of contacts, in
                    order to satisfy your specific needs.
                </p>
                <div class="common-link wow animate__fadeInUp">
                    <a href="#">Read More</a>
                </div>
                <!-- common-link -->
            </div>
            <!-- right-col-detail -->
        </div>
        <!-- col-grid-cus -->
    </div>
    <!-- custom-row -->
</section>
<!-- end of grid-view-two-col -->







<?php
get_footer();
?>