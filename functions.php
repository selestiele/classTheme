<?php

function liztheme_styles() {
    //link the stylesheet
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '0.1');
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lato|Raleway');
    wp_register_style('fa-fonts', get_template_directory_uri() . '/fontAwesome/webfonts/');
    
    //enqueue the stylesheets
    wp_enqueue_style('style');
    wp_enqueue_style('google-fonts');
    wp_enqueue_style('fa-fonts');
}
add_action('wp_enqueue_scripts', 'liztheme_styles');

register_nav_menus( array(
     'main' => __( 'Main Menu', 'main'),
     'social' => __( 'Social Menu', 'social')
));


?>