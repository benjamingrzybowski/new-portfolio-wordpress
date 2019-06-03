<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

// Load in CSS and JS
function ben_g_enqueue_styles() {

  wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/css/style.css', [], time(), 'all' );

  if ( is_front_page() ) {
    wp_enqueue_script('animations-script', get_stylesheet_directory_uri() . '/js/animations.js', array('jquery'), '1.0', true);
    wp_enqueue_script('masonry-layout', get_stylesheet_directory_uri() . '/js/masonry.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('images-loaded-script', get_stylesheet_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery', 'masonry-layout'), '1.0', false);
    wp_enqueue_script('portfolio-masonry', get_stylesheet_directory_uri() . '/js/portfolio-masonry.js', array('jquery'), '1.0', true);
  }

  wp_enqueue_script('sticky-sidebar-script', get_stylesheet_directory_uri() . '/js/sticky-kit.js', array('jquery'), '1.0', false);

  if (is_post_type_archive() || is_page_template('home.php')) {
    wp_enqueue_script('masonry-layout', get_stylesheet_directory_uri() . '/js/masonry.min.js', array('jquery'), '1.0', false);
    wp_enqueue_script('images-loaded-script', get_stylesheet_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery', 'masonry-layout'), '1.0', false);
    //error_log('archive page 2');
    //wp_enqueue_script('masonry');
    wp_enqueue_script('portfolio-masonry', get_stylesheet_directory_uri() . '/js/portfolio-masonry.js', array('jquery'), '1.0', true);
    wp_enqueue_script('archive-animations-script', get_stylesheet_directory_uri() . '/js/archive-animations.js', array('jquery'), '1.0', true);
  }
    //wp_enqueue_script('archive-animations-script', get_stylesheet_directory_uri() . '/js/archive-animations.js', array('jquery'), '1.0', true);
  
    //wp_enqueue_script('masonry-layout', get_stylesheet_directory_uri() . '/js/masonry.min.js', array('jquery'), '1.0', false);
    //wp_enqueue_script('images-loaded-script', get_stylesheet_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery', 'masonry-layout'), '1.0', false);
    //error_log('archive page 2');
    //wp_enqueue_script('masonry');
    //wp_enqueue_script('portfolio-masonry', get_stylesheet_directory_uri() . '/js/portfolio-masonry.js', array('jquery'), '1.0', true);
    //wp_enqueue_script('archive-animations-script', get_stylesheet_directory_uri() . '/js/archive-animations.js', array('jquery'), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'ben_g_enqueue_styles' );

// Portfolio CPT 

function portfolio_cpt() {
  $labels = array(
    'name'               => _x( 'portfolio', 'Portfolio Pieces' ),
    'singular_name'      => _x( 'portfolio', 'Portfolio Pieces' ),
    'add_new'            => _x( 'Add New', 'Portfolio Piece' ),
    'add_new_item'       => __( 'Add New Portfolio Piece' ),
    'edit_item'          => __( 'Edit Portfolio' ),
    'new_item'           => __( 'New Portfolio Pieces' ),
    'all_items'          => __( 'All Portfolio Pieces' ),
    'view_item'          => __( 'View Portfolio' ),
    'search_items'       => __( 'Search Portfolio' ),
    'not_found'          => __( 'No Portfolio found' ),
    'not_found_in_trash' => __( 'No Portfolio found in the Trash' ), 
    'parent_item_colon'  => ’,
    'menu_name'          => 'Portfolio'
  );
  $args = array(
    'labels'              => $labels,
    'description'         => 'Stores projects, recent work, and portfolio pieces',
    'public'              => true,
    'publicly_queryable'  => true,
    'menu_position'       => 5,
    'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'         => true,
  );
  register_post_type( 'portfolio', $args ); 
}
add_action( 'init', 'portfolio_cpt' );

// Packages CPT 

function packages_cpt() {
  $labels = array(
    'name'               => _x( 'packages', 'Service Packages' ),
    'singular_name'      => _x( 'packages', 'Service Packages'  ),
    'add_new'            => _x( 'Add New', 'Service Packages' ),
    'add_new_item'       => __( 'Add New Service Packages' ),
    'edit_item'          => __( 'Edit Service Packages' ),
    'new_item'           => __( 'New Service Packages' ),
    'all_items'          => __( 'All Service Packages' ),
    'view_item'          => __( 'View Service Packages' ),
    'search_items'       => __( 'Search Service Packages' ),
    'not_found'          => __( 'No Service Packages found' ),
    'not_found_in_trash' => __( 'No Service Packages found in the Trash' ), 
    'parent_item_colon'  => ’,
    'menu_name'          => 'Service Packages'
  );
  $args = array(
    'labels'              => $labels,
    'description'         => 'Service Package levels',
    'public'              => true,
    'publicly_queryable'  => true,
    'menu_position'       => 6,
    'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'         => true,
  );
  register_post_type( 'packages', $args ); 
}
add_action( 'init', 'packages_cpt' );

//shorten excerpts

function wpdocs_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function add_additional_class_on_li($classes, $item, $args) {
  if($args->add_li_class) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//function add_additional_class_on_a($class, $item, $args) {
//  $class = $args->add_a_class;
//  $atts['class'] = $class;
//  return $atts;
//}
//add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

register_nav_menus( [
  'main_menu' => esc_html__( 'Main Menu', 'ben_g' ),
]);