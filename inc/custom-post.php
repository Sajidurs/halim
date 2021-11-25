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

    
    // Service Custom Post Type Registering
    $labels = array(
        'name'                  => __( 'Services', 'Post type general name', 'halim' ),
        'singular_name'         => __( 'service', 'Post type singular name', 'halim' ),
        'menu_name'             => __( 'Services', 'Admin Menu text', 'halim' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'rewrite'            => array( 'slug' => 'Service' ),
        'supports'           => array( 'title', 'editor', 'custom-fields' ),
    );
 
    register_post_type( 'Services', $args );


        // Counters Custom Post Type Registering
        $labels = array(
            'name'                  => __( 'Counters', 'Post type general name', 'halim' ),
            'singular_name'         => __( 'counter', 'Post type singular name', 'halim' ),
            'menu_name'             => __( 'Counters', 'Admin Menu text', 'halim' ),
        );
     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'rewrite'            => array( 'slug' => 'Counter' ),
            'supports'           => array( 'title', 'custom-fields' ),
        );
     
        register_post_type( 'Counters', $args );


         // Team Custom Post Type Registering
         $labels = array(
            'name'                  => __( 'Teams', 'Post type general name', 'halim' ),
            'singular_name'         => __( 'team', 'Post type singular name', 'halim' ),
            'menu_name'             => __( 'Teams', 'Admin Menu text', 'halim' ),
        );
     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'rewrite'            => array( 'slug' => 'Team' ),
            'supports'           => array( 'title', 'custom-fields', 'thumbnail' ),
        );
     
        register_post_type( 'Teams', $args );

}
 
add_action( 'init', 'slider_custom_post_init' );