<?php

/**
 * Shop WooCommerce Hooks
 */

/**
 * Layout
 *
 * @see cosmetics_woo_before_main_content()
 * @see cosmetics_woo_before_shop_loop_open()
 * @see cosmetics_woo_before_shop_loop_close()
 * @see cosmetics_woo_before_shop_loop_item()
 * @see cosmetics_woo_after_shop_loop_item()
 * @see cosmetics_woo_product_thumbnail_open()
 * @see cosmetics_woo_product_thumbnail_close()
 * @see cosmetics_woo_get_product_title()
 * @see cosmetics_woo_after_shop_loop_item_title()
 * @see cosmetics_woo_loop_add_to_cart_open()
 * @see cosmetics_woo_loop_add_to_cart_close()
 * @see cosmetics_woo_get_sidebar()
 * @see cosmetics_woo_after_main_content()
 */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );

//remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

add_action( 'woocommerce_before_main_content', 'cosmetics_woo_before_main_content', 10 );

add_action( 'woocommerce_before_shop_loop', 'cosmetics_woo_before_shop_loop_open',  5 );
add_action( 'woocommerce_before_shop_loop', 'cosmetics_woo_before_shop_loop_close',  35 );

add_action( 'woocommerce_before_shop_loop_item_title', 'cosmetics_woo_product_thumbnail_open', 5 );
add_action( 'woocommerce_before_shop_loop_item_title', 'cosmetics_woo_product_thumbnail_close', 15 );

add_action( 'woocommerce_shop_loop_item_title', 'cosmetics_woo_get_product_title', 10 );

add_action( 'woocommerce_after_shop_loop_item_title', 'cosmetics_woo_after_shop_loop_item_title', 15 );

add_action( 'woocommerce_after_shop_loop_item', 'cosmetics_woo_loop_add_to_cart_open', 4 );
add_action( 'woocommerce_after_shop_loop_item', 'cosmetics_woo_loop_add_to_cart_close', 12 );

add_action ( 'woocommerce_before_shop_loop_item', 'cosmetics_woo_before_shop_loop_item', 5 );
add_action ( 'woocommerce_after_shop_loop_item', 'cosmetics_woo_after_shop_loop_item', 15 );

add_action( 'cosmetics_woo_sidebar', 'cosmetics_woo_get_sidebar', 10 );

add_action( 'woocommerce_after_main_content', 'cosmetics_woo_after_main_content', 10 );


/**
 * Single Product
 *
 * @see cosmetics_woo_before_single_product()
 * @see cosmetics_woo_before_single_product_summary_open_warp()
 * @see cosmetics_woo_before_single_product_summary_open()
 * @see cosmetics_woo_before_single_product_summary_close()
 * @see cosmetics_woo_after_single_product_summary_close_warp()
 * @see cosmetics_related_products()
 * @see cosmetics_woo_after_single_product()
 *
 */

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_action( 'woocommerce_before_single_product', 'cosmetics_woo_before_single_product', 5 );

add_action( 'woocommerce_before_single_product_summary', 'cosmetics_woo_before_single_product_summary_open_warp',  1 );

add_action( 'woocommerce_before_single_product_summary', 'cosmetics_woo_before_single_product_summary_open', 5 );
add_action( 'woocommerce_before_single_product_summary', 'cosmetics_woo_before_single_product_summary_close', 30 );

add_action( 'woocommerce_after_single_product_summary', 'cosmetics_woo_after_single_product_summary_close_warp', 5 );

add_action( 'woocommerce_after_single_product_summary', 'cosmetics_upsell_products', 5 );

add_action( 'woocommerce_after_single_product_summary', 'cosmetics_crosssell_products', 18 );

add_action( 'woocommerce_after_single_product_summary', 'cosmetics_related_products', 20 );

add_action( 'woocommerce_after_single_product', 'cosmetics_woo_after_single_product', 30 );

/*
 * Cart Page
 * */

remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );

/*
 * Addons Elementor
 * */
add_action( 'woo_elementor_product_sale_flash', 'woocommerce_show_product_loop_sale_flash' );
add_action( 'woo_elementor_add_to_cart', 'woocommerce_template_loop_add_to_cart', 5 );
