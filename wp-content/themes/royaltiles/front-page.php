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
    <?php
        $args = array( 'post_type' => 'dynamic_slider');
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <div class="item">
    <?php the_post_thumbnail();?>
        </div>
    <?php
        endwhile;
    ?>
        
    </div>
    <div class="link-box">
        <a href="#">Shop Now<span>></span></a>
    </div>
    <!-- link-box -->
</section>
<!-- end of hero banner -->

<section class="shop-category">
   <div class="container">
   <div class="title-head">
            <div class="line-sep"></div>
            <!-- line-sep -->
            <h2>Shop by</h2>
            <div class="line-sep"></div>
            <!-- line-sep -->
        </div>
        <!-- title-head -->
        <div class="row">
            <div class="col-md-4">
                <div class="shop-meta-wrap">
              <a href="#">  <img src="<?php echo get_template_directory_uri(); ?>/images/Color-Control-of-Ceramic-Tiles.jpg" alt="" /></a>
                <div class="shop-meta-overlay">
                    <a href="#">Shop All</a>
                </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->
            <div class="col-md-4">
                <div class="shop-meta-wrap">
               <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/ceramic-tiles-1000x1000.jpeg" alt="" /></a>
                <div class="shop-meta-overlay">
                    <a href="#">Shop Color</a>
                </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->
            <div class="col-md-4">
                <div class="shop-meta-wrap">
                <a href="#">  <img src="<?php echo get_template_directory_uri(); ?>/images/6db232317d3b75fccee001c45ff2275c.jpg" alt="" /></a>
                <div class="shop-meta-overlay">
                    <a href="#">Shop Shape</a>
                </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->

            <div class="col-md-4">
                <div class="shop-meta-wrap">
                <a href="#">  <img src="<?php echo get_template_directory_uri(); ?>/images/3baa07cae0380341e97109be7a537e33.jpg" alt="" /></a>
                <div class="shop-meta-overlay">
                    <a href="#">Shop Area</a>
                </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->

            <div class="col-md-4">
                <div class="shop-meta-wrap">
                <a href="#">  <img src="<?php echo get_template_directory_uri(); ?>/images/marazzi_crogiolo_d_segni_blend_005.jpg__360x258_q85_crop_subsampling-2.jpg" alt="" /></a>
                <div class="shop-meta-overlay">
                    <a href="#">Shop Pattern</a>
                </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->

            <div class="col-md-4">
                <div class="shop-meta-wrap">
                <a href="#">  <img src="<?php echo get_template_directory_uri(); ?>/images/82448740-various-ceramic-tiles-samples.jpg" alt="" /></a>
                <div class="shop-meta-overlay">
                    <a href="#">Shop Looks</a>
                </div><!-- shop-meta-overlay -->
                </div><!-- shop-meta-wrap -->
            </div><!-- col -->
        </row><!-- row -->
   </div><!-- container -->
</section>
<!-- end of shop-category -->

<section class="product-slider-wrap">
    <div class="container">
    <div class="product-slider">
        <div class="item">
            <p>Aussie made</p>
            <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/cement-tiles-encaustic-greek-terazzo-600w-1717604935.jpg" alt="" />
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
        <div class="item">
            <p>Aussie made</p>
            <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/handmade-encaustic-tulips-blue-fleur-cement-tiles-2.jpg" alt="" />
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
        <div class="item">
            <p>Aussie made</p>
            <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/paris-comedie-porcelain-tile.jpg" alt="" />
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
        <div class="item">
            <p>Aussie made</p>
            <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/istockphoto-545805508-612x612.jpg" alt="" />
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
        <div class="item">
            <p>Aussie made</p>
            <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/paris-comedie-porcelain-tile.jpg" alt="" />
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
<!-- end of trending-section -->

<section class="product-lists">
    <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href=""><div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/maxresdefault.jpg" />
                        <p class="single-product-detail">Our Exclusive Tiles</p>
                        </div><!-- product-single -->
            </a>    
                    </div><!-- col -->

                    <div class="col-md-4">
                        <a href=""><div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/43c05f1189c02595b15223e22c9cc530.jpg" />
                        <p class="single-product-detail">Our Exclusive Tiles</p>
                        </div><!-- product-single -->
            </a>    
                    </div><!-- col -->

                    <div class="col-md-4">
                        <a href=""><div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/7c76667f2d4caaedf200faeb77ea024a.jpg" />
                        <p class="single-product-detail">Our Exclusive Tiles</p>
                        </div><!-- product-single -->
            </a>    
                    </div><!-- col -->

                    <div class="col-md-4">
                        <a href=""><div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/5d4e8183043bfd00010e07d6.jpg" />
                        <p class="single-product-detail">Our Exclusive Tiles</p>
                        </div><!-- product-single -->
            </a>    
                    </div><!-- col -->

                    <div class="col-md-4">
                        <a href=""><div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/tile-selection-living-room.jpg" />
                        <p class="single-product-detail">Our Exclusive Tiles</p>
                        </div><!-- product-single -->
            </a>    
                    </div><!-- col -->

                    <div class="col-md-4">
                        <a href=""><div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/E00000000773.jpg" />
                        <p class="single-product-detail">Our Exclusive Tiles</p>
                        </div><!-- product-single -->
            </a>    
                    </div><!-- col -->

                    <div class="col-md-4">
                        <a href=""><div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/italian-tiles-for-living-room.png.png" />
                        <p class="single-product-detail">Our Exclusive Tiles</p>
                        </div><!-- product-single -->
            </a>    
                    </div><!-- col -->

                    <div class="col-md-4">
                        <a href=""><div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/1-At-Caesarea.jpg" />
                        <p class="single-product-detail">Our Exclusive Tiles</p>
                        </div><!-- product-single -->
            </a>    
                    </div><!-- col -->

                    <div class="col-md-4">
                        <a href=""><div class="product-single">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/05-Five-Important-Points-While-Choosing-Your-Ceramic-Floor-Tiles.jpg" />
                        <p class="single-product-detail">Our Exclusive Tiles</p>
                        </div><!-- product-single -->
            </a>    
                    </div><!-- col -->
                </div><!-- row -->
    </div><!-- container -->
            </section><!-- product-lists -->
            <!-- end of product-list -->

<?php
     get_footer();
      ?>
