<?php
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
add_action('woocommerce_sidebar', 'royaltiles_woocommerce_get_sidebar', 10);
function royaltiles_woocommerce_get_sidebar()
{
    if (!is_shop() && is_product_category()) :
        wc_get_template('global/sidebar.php');
    endif;
}