<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head>
section and everything up until
<div id="content">
 * * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials * * @package RoyalTiles */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e('Skip to content', 'royaltiles'); ?></a>
        <div class="top-bar">
            <ul class="wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <li><a href="tel:(02) 9748 0885"><i class="fa fa-phone" aria-hidden="true"></i> (02) 9748 0885</a></li>
                <li><a href="info@royaltiles.com.au"><i class="fa fa-envelope"></i> info@royaltiles.com.au</a></li>
                <li><a href="https://www.facebook.com/RoyalTilesAustralia"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div><!-- top-bar -->
        <!-- <div class="animation-roll-out">
            <div class="first-roll spin-roll"></div>
            <div class="loader-text text1">
                <h1>ROYAL</h1>
            </div>
            <div class="loader-text text2">
                <h1>TILES</h1>
            </div>
            <div class="second-roll spin-roll"></div>
        </div> -->
        <header id="masthead" class="site-header">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="site-branding wow animate__fadeInLeft" data-wow-duration="0.7s"
                            data-wow-delay="0.7s">
                            <?php
                            the_custom_logo();
                            if (is_front_page() && is_home()) : ?>
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>"
                                    rel="home"><?php bloginfo('name'); ?></a>
                            </h1>
                            <?php else : ?>
                            <p class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>"
                                    rel="home"><?php bloginfo('name'); ?></a>
                            </p>
                            <?php endif;
                            $royaltiles_description = get_bloginfo('description', 'display');
                            if ($royaltiles_description || is_customize_preview()) : ?>
                            <p class="site-description"><?php echo $royaltiles_description;
                                                            // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                                            ?></p>
                            <?php endif;
                            ?>
                        </div>
                        <!-- .site-branding -->
                    </div>
                    <!-- col -->
                    <div class="col-5 col-md-8">
                        <nav id="site-navigation" class="main-navigation wow fadeInDown" data-wow-duration="0.9s"
                            data-wow-delay="0.9s">
                            <button class="menu-toggle" aria-controls="primary-menu"
                                aria-expanded="false"><?php esc_html_e('Primary Menu', 'royaltiles'); ?></button>
                            <?php wp_nav_menu([
                                'theme_location' => 'menu-1',
                                'menu_id' => 'primary-menu',
                            ]); ?>
                            <a href="#" class="shop-icon-menu"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i></a>
                            <a class="search-main" href="#search">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" class="svg" />
                            </a>
                            <div id="search">
                                <span class="close" id="search-close"><img
                                        src="<?php echo get_template_directory_uri(); ?>/images/close.svg"
                                        class="svg" /></span>
                                <form role="search" id="searchform" action="<?php echo home_url('/'); ?>" method="get">
                                    <div class="header-search-search">
                                        <input value="" name="s" type="search" placeholder="Type To Search" />
                                        <button type="submit" class="search-submit">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/search.svg"
                                                class="svg" /><span
                                                class="screen-reader-text"><?php echo _x('Search', 'submit button', 'ronzappia'); ?></span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </nav>
                        <!-- #site-navigation -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- container-fluid -->
        </header>
        <!-- #masthead -->
    </div>
</body>

</html>
</div>