<?php
/**
 * Template: Jquery Sample (name the file after the slug)
 * Purpose: trying out the REST API
 * @package: WordPress
 * @sub-package: Twenty Seventeen
 * @sub-package: tw17child (Child theme)
 */

get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <h2> <?php _e('Map'); // translation ready string ?> </h2>

      <!-- the  goes here -->
      <div id='map'></div>
      <div id="text"></div>

    </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- .wrap -->

<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
<!-- link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' / -->

<script>
  /**
   * ADD CONTENT VIA JQUERY
   * @url: https://developer.wordpress.org/themes/advanced-topics/javascript-best-practices/
   * Note: that's the way to add Jquery functions in a theme.
   */
  (function($) { // document ready

      /////

      $('#map').css({
        width: '100%',
        height: '225px'
      });

      mapboxgl.accessToken = 'pk.eyJ1IjoiYXNhdGhvb3IiLCJhIjoiY2oyd3hlbzU3MDA5NzJxbm9iMjczanJndCJ9.HahDB7Z1rrD5THIYQh6t4g';
      const map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/asathoor/cj9iskjc63b9t2sl7p9z7nxxc',
      center: [10.21,56.15],
      zoom: 12.0
      });

      /////

  })(jQuery); // document ready end
</script>

<?php get_footer(); ?>
