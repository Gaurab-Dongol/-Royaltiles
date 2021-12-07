<?php

add_action('init', 'royaltiles_product_taxonomies');
function royaltiles_product_taxonomies()
{
    $labels = array(
        'name'                       => _x('Product Group', 'taxonomy general name', 'royaltiles'),
        'singular_name'              => _x('Product Group', 'taxonomy singular name', 'royaltiles'),
        'search_items'               => __('Search Product Group', 'royaltiles'),
        'popular_items'              => __('Popular Product Groups', 'royaltiles'),
        'all_items'                  => __('All Product Groups', 'royaltiles'),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __('Edit Product Group', 'royaltiles'),
        'update_item'                => __('Update Product Group', 'royaltiles'),
        'add_new_item'               => __('Add New Product Group', 'royaltiles'),
        'new_item_name'              => __('New Product Group Name', 'royaltiles'),
        'separate_items_with_commas' => __('Separate Product Groupn with commas', 'royaltiles'),
        'add_or_remove_items'        => __('Add or remove Product Groupn', 'royaltiles'),
        'choose_from_most_used'      => __('Choose from the most used Product Group', 'royaltiles'),
        'not_found'                  => __('No Product Group found.', 'royaltiles'),
        'menu_name'                  => __('Product Group', 'royaltiles'),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
    );
    register_taxonomy('product-group', 'product', $args);
}