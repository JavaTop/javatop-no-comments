<?php
/**
 * Plugin Name:       JavaTop No Comments
 * Plugin URI:        https://wordpress.org/plugins/javatop-no-comments
 * Description:       Disables comments site-wide: closes comment threads, removes the comments menu, hides the dashboard widget, and suppresses comment support on all post types.
 * Version:           1.1.0
 * Requires at least: 6.0
 * Requires PHP:      8.0
 * Author:            JavaTop AI & Automation
 * Author URI:        https://javatop.com.au
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       javatop-no-comments
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Close comments and pings on all posts.
 */
function javatop_no_comments_filter_status( $open, $post_id ) {
	return false;
}
add_filter( 'comments_open', 'javatop_no_comments_filter_status', 20, 2 );
add_filter( 'pings_open', 'javatop_no_comments_filter_status', 20, 2 );

/**
 * Return empty comments array for all posts.
 */
function javatop_no_comments_filter_existing( $comments ) {
	return array();
}
add_filter( 'comments_array', 'javatop_no_comments_filter_existing', 20, 2 );

/**
 * Remove comment support from all post types.
 */
function javatop_no_comments_remove_support() {
	$post_types = get_post_types();
	foreach ( $post_types as $post_type ) {
		if ( post_type_supports( $post_type, 'comments' ) ) {
			remove_post_type_support( $post_type, 'comments' );
			remove_post_type_support( $post_type, 'trackbacks' );
		}
	}
}
add_action( 'admin_init', 'javatop_no_comments_remove_support' );

/**
 * Remove comments menu item from admin sidebar.
 */
function javatop_no_comments_remove_menu() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'javatop_no_comments_remove_menu' );

/**
 * Remove comments from admin bar.
 */
function javatop_no_comments_admin_bar( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'comments' );
}
add_action( 'admin_bar_menu', 'javatop_no_comments_admin_bar', 999 );

/**
 * Redirect any direct access to the comments admin page.
 */
function javatop_no_comments_redirect() {
	global $pagenow;
	if ( is_admin() && 'edit-comments.php' === $pagenow ) {
		wp_safe_redirect( admin_url() );
		exit;
	}
}
add_action( 'admin_init', 'javatop_no_comments_redirect' );

/**
 * Remove recent comments dashboard widget.
 */
function javatop_no_comments_remove_widget() {
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
}
add_action( 'wp_dashboard_setup', 'javatop_no_comments_remove_widget' );

/**
 * Remove comments column from post list tables.
 */
function javatop_no_comments_remove_column( $columns ) {
	unset( $columns['comments'] );
	return $columns;
}
add_filter( 'manage_posts_columns', 'javatop_no_comments_remove_column' );
add_filter( 'manage_pages_columns', 'javatop_no_comments_remove_column' );
