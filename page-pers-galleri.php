<?php get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php
			/**
			 * Loop copy from: page.php
			 * Comments part removed
			 */
			while ( have_posts() ) : the_post();

				get_template_part( 
					'template-parts/page/content', 
					'page' 
				);

			endwhile; // End of the loop.
			?>

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
	
	console.log('Jquery: all systems are up and running. Alert level: green.');
	$('h1').text('Jeg har min hest, jeg har min lasso');

	// try: animate.css
	// @url: https://github.com/daneden/animate.css
	$('h1').addClass('animated swing');

} )( jQuery ); // jquery end

</script>

<?php get_footer(); ?> 
