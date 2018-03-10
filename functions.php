<?php

function liztheme_styles() {
    //link the stylesheet
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '0.1');
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Lato|Raleway');

    //enqueue the stylesheet
    wp_enqueue_style('style');
    wp_enqueue_style('google-fonts');
}
add_action('wp_enqueue_scripts', 'liztheme_styles');

?>