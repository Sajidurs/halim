<?php

// Header Background Color Picker
function acf_css() {
    ?>
        <!-- Dynamic Style -->
        <style>
            body{
            background-color: <?php the_field( 'body_background', 'option' );?>
        } 
        .header-top{
            background-color: <?php the_field( 'header_background', 'option' );?>
        }  
        .header-top a{
            color: <?php the_field( 'header_text_color', 'option' );?>
        }
        </style>
    <?php
}

add_action( 'wp_head', 'acf_css' );