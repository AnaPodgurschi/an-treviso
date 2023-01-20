<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function an_treviso_scripts()
{
    wp_enqueue_style('an_treviso-css', get_template_directory_uri() . '/assets/libs/leaflet/leaflet.css');
    wp_enqueue_style('an_treviso-style', get_stylesheet_uri());
    wp_enqueue_style('an_treviso-my', get_template_directory_uri() . '/assets/css/my.css');

    wp_enqueue_script('an_treviso-js', get_template_directory_uri() . '/assets/libs/leaflet/leaflet.js', ['jquery'], null, true);
    wp_enqueue_script('an_treviso-stellar-js', get_template_directory_uri() . '/assets/libs/jquery.stellar.min.js', ['jquery'], null, true);
    wp_enqueue_script('an_treviso-custom-jquery', get_template_directory_uri() . '/assets/js/custom-jquery.js', ['jquery'], null, true);
    wp_enqueue_script('an_treviso-webpack', get_template_directory_uri() . '/assets/js/webpack.js');
}

add_action('wp_enqueue_scripts', 'an_treviso_scripts');
