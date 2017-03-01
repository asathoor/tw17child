<?php 
/**
 * Template: Twenty seventeen category template
 * Purpose: trying out the REST API
 * @package: WordPress
 * @sub-package: tw17child
 *
 */
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- ok, adding a title like that is sooo bad practise, but anyway ... -->
			<h2> <?php _e("Content in the Twenty Seventeen Category"); ?> </h2>
			<h5> <?php _e("Articles	 this category ( via PHP )"); ?> </h5>

			<!-- the loop -->
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			 	<!-- Test if the current post is in category 3. -->
			 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
			 	<!-- Otherwise, the div box is given the CSS class "post". -->

			 	<?php if ( in_category( '3' ) ) : ?>
			 		<div class="post-cat-three">
			 	<?php else : ?>
			 		<div class="post">
			 	<?php endif; ?>


			 	<!-- Display the Title as a link to the Post's permalink. -->

			 	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


			 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

			 	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


			 	<!-- Display the Post's content in a div box. -->

			 	<div class="entry">
			 		<?php the_content(); ?>
			 	</div>


			 	<!-- Display a comma separated list of the Post's Categories. -->

			 	<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
			 	</div> <!-- closes the first div box -->


			 	<!-- Stop The Loop (but note the "else:" - see next line). -->

			 <?php endwhile; else : ?>


			 	<!-- The very first "if" tested to see if there were any Posts to -->
			 	<!-- display.  This "else" part tells what do if there weren't any. -->
			 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


			 	<!-- REALLY stop The Loop. -->
			 <?php endif; ?>


			<!-- loop end -->


		<aside>
			<hr>
			<h5> <?php _e("Other Categories ( via REST API )"); ?> </h5>
			
			<p> <?php _e("Costum made category page. Getting content via REST API, not the loop."); ?> </p>

			<!-- Below we add data via REST API -->
			<div id="REST"></div>
		</aside>

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

	// code goes here
	console.log('Jquery: all systems up and running. Alert level: green.');

	/**
	 * REST API
	 * get content via REST API ( from multimusen.dk )
	 * @url: https://github.com/asathoor/wpRESTandJson/blob/master/rest.html
	 *
	 * Note:
	 * This url should work: "<?php echo get_site_url(); ?>/wp-json/wp/v2/categories"
	 * If not, try to hardcode the url: http://YOURWEBSITE.EDU/wp-json/wp/v2/categories
	 */
	$.ajax({
		  url: "<?php echo get_site_url(); ?>/wp-json/wp/v2/categories",
	 
		  // The name of the callback parameter
		  jsonp: "callback",
	 
		  // Tell jQuery we're expecting JSON
		  dataType: "json",
	 
		  // Tell that we want JSON
		  data: {
		      
		      format: "json"
		  },
	 
		  success: function( response ) {
		      console.log( response ); // server response
					//console.log( response[0].title.rendered ); // ok
					//console.log( response.length );

				$('#REST').append( '<ul>' ); // append markup to the #REST id

				for( var i = 0; i < response.length; i++){

					//console.log( response[i].title.rendered );
					$('#REST').append( '<li> <a href="' 
						+ response[i].link 
						+ '"> ' 
						+ response[i].name 
						+ ' </a> </li>' 
					); // li elements

				}

				$('#REST').append( '</ul>' ); // /ul
		  }
	});
	// code end

} )( jQuery ); // jquery end

</script>

<?php get_footer();
