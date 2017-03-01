<?php 
/**
 * @package: WordPress
 * @sub-package: Twenty Seventeen
 * @sub-package: tw17child
 * @url: https://github.com/asathoor/tw17child
 *
 * Template: page-pers-galleri.php
 * Purpose: Twenty Seventeen costum child theme page
 */
get_header(); ?>

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

	// hello world variant
	$('h1').text('I\'m a poor lonesome cowboy');

	// try: animate.css
	// @url: https://github.com/daneden/animate.css
	$('h1').hover( function(){
		$(this).addClass('animated swing');
	} );

} )( jQuery ); // jquery end

</script>

<?php get_footer(); ?> 
