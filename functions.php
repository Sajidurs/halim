<?php
require_once(get_theme_file_path("/inc/theme-options.php"));
require_once(get_theme_file_path("/inc/option-css.php"));
require_once(get_theme_file_path("/inc/class-tgm-plugin-activation.php"));
require_once(get_theme_file_path("/inc/halim-activation.php"));
require_once(get_theme_file_path("/inc/halim-demo-import.php"));
require_once(get_theme_file_path("/inc/halim-acf-data.php"));
function halim_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'clients', 'teams', 'testimonials', 'portfolio', 'gallery'));
    load_theme_textdomain('halim', get_template_directory() . '/languages');

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'halim')
    ));

}
add_action('after_setup_theme', 'halim_setup'); 

function halim_assets() {
    
    wp_enqueue_style( 'font-poppins', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );

    wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'imageloaded', get_template_directory_uri() . '/assets/js/imageloaded.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );

}   
add_action('wp_enqueue_scripts', 'halim_assets');

// Blog Page Content Excerpt Length
function text_domain_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'text_domain_custom_excerpt_length', 999 );

// Register Sidebar
function halim_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'halim' ),
        'id'            => 'sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'halim' ),
        'before_widget' => '<div class="single-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'halim_theme_slug_widgets_init' );

// Registering Footer Widget 1
function halim_theme_slug_widgets_footer1() {
    register_sidebar( array(
        'name'          => __( 'Footer 1', 'halim' ),
        'id'            => 'footer1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'halim' ),
        'before_widget' => ' <div class="single-footer footer-logo">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'halim_theme_slug_widgets_footer1' );

// Registering Footer Widget 2
function halim_theme_slug_widgets_footer2() {
    register_sidebar( array(
        'name'          => __( 'Footer 2', 'halim' ),
        'id'            => 'footer2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'halim' ),
        'before_widget' => ' <div class="single-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'halim_theme_slug_widgets_footer2' );

// Registering Footer Widget 3
function halim_theme_slug_widgets_footer3() {
    register_sidebar( array(
        'name'          => __( 'Footer 3', 'halim' ),
        'id'            => 'footer3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'halim' ),
        'before_widget' => ' <div class="single-footer">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'halim_theme_slug_widgets_footer3' );
