<?php

/**
 * WARNING: This file is part of the core ThemeFuse Framework. It is not recommended to edit this section
 *
 * @package ThemeFuse
 * @since 2.0
 */
require_once(TEMPLATEPATH . '/framework/BootsTrap.php');
require_once(TEMPLATEPATH . '/theme_config/theme_includes/AJAX_CALLBACKS.php');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'page' ) );
add_image_size( 'page-image', 405, 9999 ); //300 pixels wide (and unlimited height)
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}