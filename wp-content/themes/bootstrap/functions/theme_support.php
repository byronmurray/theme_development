<?php 
require_once('navwalker.php');

function register_theme_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'Primary Menu' ),
      'footer' => __( 'Footer Menu' )
    )
  );
}

add_filter( 'show_admin_bar', '__return_false' );

add_action( 'init', 'register_theme_menus' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'woocommerce' );

set_post_thumbnail_size( 600, 450, array( 'center', 'center')  );

add_image_size( 'blog_featured', 750, 500, array( 'center', 'center' ) );
add_image_size( 'hero_image', 1900, 300, array( 'center', 'center' ) );

