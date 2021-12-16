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
        .header{
            background-color: <?php the_field( 'menu_color', 'option' );?>
        }
        .single-counter{
            background-color: <?php the_field( 'menu_item_color', 'option' );?>
        }
        .cta{
            background-color: <?php the_field( 'footer_bg', 'option' );?>
        }
        .cta{
            color: <?php the_field( 'footer_text_color', 'option' );?>
        }
        .cta a.box-btn{
            background-color: <?php the_field( 'all_button_colors', 'option' );?>
        }
        </style>
    <?php
}

add_action( 'wp_head', 'acf_css' );
