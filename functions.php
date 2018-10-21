<?php
/* add stylesheets */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'Mother Stylesheet', get_template_directory_uri() . '/style.css' );

    // Mapbox css
    wp_enqueue_style( 'Mapbox Stylesheet', 'https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' );
}

/* improve performance */

?>
