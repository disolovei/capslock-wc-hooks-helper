<?php
/*
 * Plugin Name: CapsLock WC Hooks Helper
 * Author: Dima Solovey
 * Version: 0.1
 */

defined( 'ABSPATH' ) || exit;

$actions = array(
    'before_main_content',
    'before_shop_loop',
    'shop_loop',
    'after_shop_loop',
    'no_products_found',
    'after_main_content',
    'sidebar',
    'before_shop_loop_item',
    'before_shop_loop_item_title',
    'shop_loop_item_title',
    'after_shop_loop_item_title',
    'before_subcategory',
    'before_subcategory_title',
    'shop_loop_subcategory_title',
    'after_subcategory',
    'before_single_product',
    'before_single_product_summary',
    'after_single_product_summary',
    'after_single_product',
    'widget_price_filter_start',
    'widget_price_filter_end',
    'widget_product_item_start',
    'widget_product_item_end',
    'widget_product_review_item_start',
    'widget_product_review_item_end',
    'before_main_content',
    'after_main_content',
    'auth_page_header',
    'auth_page_footer',
    'before_cart',
    'before_cart_table',
    'before_cart_contents',
    'after_cart_item_name',
    'cart_contents',
    'cart_coupon',
    'cart_actions',
    'after_cart_contents',
    'after_cart_table',
    'before_cart_collaterals',
    'cart_collaterals',
    'after_cart',
    'cart_is_empty',
    'after_shipping_rate',
    'before_cart_totals',
    'cart_totals_before_shipping',
    'cart_totals_after_shipping',
    'cart_totals_before_order_total',
    'cart_totals_after_order_total',
    'proceed_to_checkout',
    'after_cart_totals',
    'before_mini_cart',
    'before_mini_cart_contents',
    'mini_cart_contents',
    'widget_shopping_cart_total',
    'widget_shopping_cart_before_buttons',
    'widget_shopping_cart_after_buttons',
    'after_mini_cart',
    'before_shipping_calculator',
    'after_shipping_calculator',
    'cart_has_errors',
    'before_checkout_billing_form',
    'after_checkout_billing_form',
    'before_checkout_registration_form',
    'after_checkout_registration_form',
    'before_checkout_form',
    'checkout_before_customer_details',
    'checkout_billing',
    'checkout_shipping',
    'checkout_after_customer_details',
    'checkout_before_order_review_heading',
    'checkout_before_order_review',
    'checkout_order_review',
    'checkout_after_order_review',
    'after_checkout_form',
    'order_item_meta_start',
    'order_item_meta_end',
    'pay_order_before_submit',
    'pay_order_after_submit',
    'before_checkout_shipping_form',
    'after_checkout_shipping_form',
    'before_order_notes',
    'after_order_notes',
    'review_order_before_payment',
    'review_order_before_submit',
    'review_order_after_submit',
    'review_order_after_payment',
    'review_order_before_cart_contents',
    'review_order_after_cart_contents',
    'review_order_before_shipping',
    'review_order_after_shipping',
    'review_order_before_order_total',
    'review_order_after_order_total',
    'checkout_before_terms_and_conditions',
    'checkout_terms_and_conditions',
    'checkout_after_terms_and_conditions',
    'before_thankyou',
    'email_header',
    'email_order_details',
    'email_order_meta',
    'email_customer_details',
    'email_footer',
    'login_form_start',
    'login_form',
    'login_form_end',
    'before_quantity_input_field',
    'after_quantity_input_field',
    'account_dashboard',
    'before_my_account',
    'after_my_account',
    'before_available_downloads',
    'available_downloads',
    'after_available_downloads',
    'after_account_downloads',
    'before_edit_account_form',
    'edit_account_form_start',
    'edit_account_form',
    'edit_account_form_end',
    'after_edit_account_form',
    'before_edit_account_address_form',
    'after_edit_account_address_form',
    'before_customer_login_form',
    'after_customer_login_form',
    'before_lost_password_form',
    'lostpassword_form',
    'after_lost_password_form',
    'before_reset_password_form',
    'resetpassword_form',
    'after_reset_password_form',
    'account_navigation',
    'account_content',
    'available_download_start',
    'available_download_end',
    'my_account_my_orders_columns',
    'before_account_navigation',
    'after_account_navigation',
    'before_account_orders',
    'before_account_orders_pagination',
    'after_account_orders',
    'before_account_payment_methods',
    'after_account_payment_methods',
    'view_order',
    'order_details_before_order_table',
    'order_details_before_order_table_items',
    'order_details_after_order_table_items',
    'order_details_after_order_table',
    'order_details_after_customer_details',
    'before_add_to_cart_form',
    'before_add_to_cart_button',
    'after_add_to_cart_button',
    'after_add_to_cart_form',
    'before_add_to_cart_quantity',
    'after_add_to_cart_quantity',
    'before_variations_form',
    'before_single_variation',
    'single_variation',
    'after_single_variation',
    'after_variations_form',
    'product_additional_information',
    'product_additional_information',
    'product_after_tabs',
    'product_meta_start',
    'product_meta_end',
    'product_thumbnails',
    'review_before',
    'review_before_comment_meta',
    'review_meta',
    'review_before_comment_text',
    'review_comment_text',
    'review_after_comment_text',
    'share',
);

foreach ( array_unique( $actions ) as $action ) {
    add_action( "woocommerce_{$action}", 'blablabla_action' );
}

$filters = array(
    'show_page_title',
    'reviews_title',
    'product_review_list_args',
    'comment_pagination_args',
    'product_review_comment_form_args',
    'cart_item_product',
    'cart_item_product_id',
    'cart_item_visible',
    'cart_item_permalink',
    'cart_item_class',
    'cart_item_remove_link',
    'cart_item_thumbnail',
    'cart_item_name',
    'cart_item_backorder_notification',
    'cart_item_price',
    'cart_item_quantity',
    'cart_item_subtotal',
    'return_to_shop_redirect',
    'shipping_estimate_html',
    'shipping_may_be_available_html',
    'no_shipping_available_html',
    'cart_no_shipping_available_html',
    'product_loop_start',
    'product_loop_end',
    'widget_cart_item_quantity',
    'shipping_calculator_enable_country',
    'shipping_calculator_enable_state',
    'shipping_calculator_enable_city',
    'shipping_calculator_enable_postcode',
    'create_account_default_checked',
    'checkout_coupon_message',
    'checkout_login_message',
    'order_item_visible',
    'order_item_class',
    'order_item_name',
    'order_item_quantity_html',
    'no_available_payment_methods_message',
    'pay_order_button_html',
    'enable_order_notes_field',
    'order_button_html',
    'checkout_cart_item_quantity',
    'checkout_show_terms',
    'thankyou_order_received_text',
    'loop_add_to_cart_link',
    'pagination_args',
    'sale_flash',
    'return_to_shop_redirect',
    'my_account_edit_address_title',
    'lost_password_message',
    'reset_password_message',
    'lost_password_confirmation_message',
    'my_account_get_addresses',
    'my_account_my_address_description',
    'available_download_count',
    'available_download_link',
    'my_account_my_orders_columns',
    'my_account_my_orders_query',
    'my_account_my_orders_title',
    'order_item_permalink',
    'order_tracking_status',
    'add_to_cart_form_action',
    'grouped_product_columns',
    'out_of_stock_message',
    'reset_variations_link',
    'quantity_input_min',
    'quantity_input_max',
    'product_additional_information_heading',
    'product_description_heading',
    'product_tabs',
    'product_price_class',
    'product_thumbnails_columns',
    'single_product_image_gallery_classes',
    'single_product_image_thumbnail_html',
    'short_description',
);

foreach ( array_unique( $filters ) as $filter ) {
    add_filter( "woocommerce_{$filter}", 'blablabla_filter' );
}

/**
 * @param $return
 * @return mixed
 */
function blablabla_filter( $return ) {
    if ( ! is_ajax() ) {
        echo '<!--| Filter was called: ' . current_filter() . ' |-->';
    }
    return $return;
}

/**
 *
 */
function blablabla_action() {
    if ( ! is_ajax() ) {
        echo '<!--| Action was called: ' . current_filter() . ' |-->';
    }
}
