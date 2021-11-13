<?php

/**
 * Register a custom post type called "Slider".
 *
 * @see get_post_type_labels() for label keys.
 */
function slider_custom_post_init() {

    // Slider Custom Post Type Registering
    $labels = array(
        'name'                  => __( 'Sliders', 'Post type general name', 'halim' ),
        'singular_name'         => __( 'Slider', 'Post type singular name', 'halim' ),
        'menu_name'             => __( 'Sliders', 'Admin Menu text', 'halim' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'rewrite'            => array( 'slug' => 'Slider' ),
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    );
 
    register_post_type( 'Sliders', $args );
}
 
add_action( 'init', 'slider_custom_post_init' );