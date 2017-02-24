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

		
			<h2> <?php _e('Here\'s a costum page'); // translation ready string ?> </h2>

			<!-- the loop goes here -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<script>

/**
 * Here we add the content via Jquery, not PHP.
 * @url: https://developer.wordpress.org/themes/advanced-topics/javascript-best-practices/
 * Note: that's the way to add Jquery functions in a theme.
 */
( function( $ ) {

	// your code from here ...
	
	console.log('Jquery: all systems up and running. Alert level: green.');

	// code end

} )( jQuery ); // jquery end

</script>

<?php get_footer(); ?>
