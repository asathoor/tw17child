<?php
/* add stylesheets */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'Mother Stylesheet', get_template_directory_uri() . '/style.css' );

    // Mapbox css
    wp_enqueue_style( 'Mapbox Stylesheet', 'https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' );

    // Rest API test script
    wp_enqueue_script( 'Rest_API_test_petj', get_stylesheet_directory_uri() . '/js/js.js', false, 1.0, true );

    // REST API security - from youtube tutorial
    wp_localize_script('Rest_API_test_petj','magicalData', array(
        'nonce' => wp_create_nonce('wp_rest')
    ));

}
