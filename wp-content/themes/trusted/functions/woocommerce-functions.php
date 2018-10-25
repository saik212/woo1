<?php
/**
 * Custom hooks and functions for WooCommerce compatibility
 *
 * @package Trusted
 */

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description', 10);
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

add_action( 'woocommerce_before_main_content', 'trusted_theme_wrapper_start', 10);
add_action( 'woocommerce_after_main_content', 'trusted_theme_wrapper_end', 10);
add_action( 'trusted_woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
add_action( 'trusted_woocommerce_archive_description', 'woocommerce_product_archive_description', 10);

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

function trusted_theme_wrapper_start() {
	if ( !is_active_sidebar( 'trusted-shop-sidebar' ) || is_product() ) {
		$page_full_width = ' full-width';
	} else {
		$page_full_width = '';
	}
	echo '<div id="primary" class="content-area'.$page_full_width.'">';
}

function trusted_theme_wrapper_end() {
	echo '</div>';
	if ( !is_product() ) {
	get_sidebar( 'shop' );
	}
}

add_filter( 'woocommerce_show_page_title', '__return_false' );

add_filter( 'woocommerce_product_description_heading', '__return_false' );

add_filter( 'woocommerce_product_additional_information_heading', '__return_false' );

function trusted_change_prev_text( $args ){
	$args['prev_text'] = '<i class="fa fa-angle-left"></i>';
	$args['next_text'] = '<i class="fa fa-angle-right"></i>';
	return $args;
}
add_filter( 'woocommerce_pagination_args', 'trusted_change_prev_text' );

function trusted_woocommerce_breadcrumbs( $defaults ) {
	$defaults['delimiter'] = '<span class="delimiter"></span>';
	$defaults['wrap_before'] = '<nav role="navigation" aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb"><ul class="trail-items" itemscope itemtype="http://schema.org/BreadcrumbList">';
	$defaults['wrap_after'] = '</ul></nav>';
	$defaults['before'] = '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="trail-item">';
	$defaults['after'] = '</li>';
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'trusted_woocommerce_breadcrumbs' );