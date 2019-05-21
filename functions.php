<?php
add_action( 'login_enqueue_scripts', function() {
	wp_enqueue_style( 'notheme-login-style', trailingslashit( get_stylesheet_directory_uri() ) . 'admin.css' );
});

add_action( 'admin_menu', function() {
    remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit.php?post_type=page' );
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'upload.php' );
});

add_action( 'wp_dashboard_setup', function() {
	global $wp_meta_boxes;

	unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity'] );
});

add_action( 'wp_before_admin_bar_render', function() {
	global $wp_admin_bar;

    $wp_admin_bar->remove_menu( 'site-name' );
    $wp_admin_bar->remove_menu( 'view-site' );
    $wp_admin_bar->remove_menu( 'comments' );
    $wp_admin_bar->remove_menu( 'new-post' );
    $wp_admin_bar->remove_menu( 'new-media' );
    $wp_admin_bar->remove_menu( 'new-page' );
});
