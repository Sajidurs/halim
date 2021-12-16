<?php

// TGM Plugin Activation

function halim_plugin_activation(){
    $plugins = array(
        // Plugin 1
        array(
        'name'      => __( 'Contact Form 7', 'halim' ),
        'slug'      => 'contact-form-7',
        'required'  => true,
        ),

        // Plugin 2
        array(
        'name'      => __( 'Advanced Custom Fields Font Awesome', 'halim' ),
        'slug'      => 'advanced-custom-fields-font-awesome',
        'required'  => true,
        ),

        // Plugin 3
        array(
        'name'          => __( 'Halim Custom Post', 'halim' ),
        'slug'          => 'halim-custom-post',
        'source'        =>  get_template_directory(). '/plugins/halim-custom-post.zip',
        'required'      => true,
        ),

        // Plugin 4
        array(
            'name'          => __( 'Advanced Custom Field Pro', 'halim' ),
            'slug'          => 'advanced-custom-field-pro',
            'source'        =>  get_template_directory(). '/plugins/advanced-custom-fields-pro.zip',
            'required'      => true,
            ),

        // Plugin 5
        array(
            'name'      => __( 'One Click Demo Import', 'halim' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
            ),

        // Plugin 6
        array(
            'name'      => __( 'Widget Importer & Exporter', 'halim' ),
            'slug'      => 'widget-importer-exporter',
            'required'  => true,
            ),
            
    
    );
        $config = array(
        'id'           => 'halim-plugin-activation',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'menu'         => 'halim-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
        );

        tgmpa( $plugins, $config );

}
add_action('tgmpa_register', 'halim_plugin_activation');