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

<div class="hamburger"></div>

<section class="hero-banner">
    <div class="hero-slider">
        <div class="item">
            <iframe src="https://www.youtube.com/embed/LAtnAtxQ4HQ?autoplay=1&mute=1&controls=0&rel=0" frameborder="0" allow="autoplay; picture-in-picture" title="YouTube Embed"></iframe>
            <!-- <iframe id="player" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="100%" height="360" src="https://www.youtube.com/embed/cfxJVQLZyKw?mute=1&amp;autoplay=1&amp;playsinline=1&amp;loop=1&amp;controls=0&amp;origin=https%3A%2F%2Fgofortress.com&amp;playlist=cfxJVQLZyKw&amp;rel=0&amp;vq=720&amp;enablejsapi=1&amp;widgetid=1"></iframe> -->
        </div>
        <div class="item">
            <img src="<?php echo get_template_directory_uri(). '/images/banner1.jpg'; ?>" alt="" />
        </div>
    </div>
    <div class="link-box">
        <a href="#">Shop Now<span>></span></a>
    </div>
    <!-- link-box -->
</section>
<!-- end of hero banner -->

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
                <div class="trending-left-img wow slideInLeft">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image-map-1-570x715.jpg" class="svg" />
                </div>
                <!-- trending-left-img -->
            </div>
            <!-- col -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 wow slideInLeft">
                        <div class="right-grid-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-15-270x280.png" class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Lorem ipsum</h5>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-16-270x280.png" class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Lorem ipsum</h5>
                            <p>$500.00</p>
                        </div>
                        <!-- portfolio-content -->
                    </div>
                    <!-- col -->
                    <div class="col-md-6 wow slideInLeft">
                        <div class="right-grid-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-17-270x280.png" class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Lorem ipsum</h5>
                            <p>$500.00</p>
                        </div>
                        <!-- portfolio-content -->
                    </div>
                    <!-- col -->
                    <div class="col-md-6 wow slideInRight">
                        <div class="right-grid-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/product-15-270x280.png" class="svg" />

                            <div class="grid-overlay">
                                <span>+</span>
                            </div>
                            <!-- grid-overlay -->
                        </div>
                        <!-- right-grid-image -->
                        <div class="portfolio-content">
                            <h5>Lorem ipsum</h5>
                            <p>$500.00</p>
                        </div>
                        <!-- portfolio-content -->
                    </div>
                    <!-- col -->
                </div>
                <!-- right-grid-wrap -->
            </div>
            <!-- col -->
        </div>
        <!-- row -->
        <div class="icon-info-wrap">
            <div class="row">
                <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="icon-info-blk">
                        <i class="fa fa-bus" aria-hidden="true"></i>
                        <p>FAST DELIVERY<span>Within 1-2 business days</span></p>
                    </div>
                    <!-- icon-info-blk -->
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="icon-info-blk">
                        <i class="fa fa-bus" aria-hidden="true"></i>
                        <p>FAST DELIVERY<span>Within 1-2 business days</span></p>
                    </div>
                    <!-- icon-info-blk -->
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="icon-info-blk">
                        <i class="fa fa-bus" aria-hidden="true"></i>
                        <p>FAST DELIVERY<span>Within 1-2 business days</span></p>
                    </div>
                    <!-- icon-info-blk -->
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                    <div class="icon-info-blk">
                        <i class="fa fa-bus" aria-hidden="true"></i>
                        <p>FAST DELIVERY<span>Within 1-2 business days</span></p>
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

<?php
     get_footer();
      ?>
