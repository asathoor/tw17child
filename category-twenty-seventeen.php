<?php 
/**
 * Template: Twenty seventeen category template
 * Purpose: trying out the REST API
 * @package: WordPress
 * @sub-package: tw17child
 */
get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- ok, adding a title like that is sooo bad practise, but anyway ... -->
			<h2> <?php _e("Content in the Twenty Seventeen Category"); ?> </h2>

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
			<h2> <?php _e("Other Categories ( via REST API )"); ?> </h2>
			
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
	console.log('Jquery running. Q.E.D.');

	// get content via REST API ( from multimusen.dk ! )
	// @url: https://github.com/asathoor/wpRESTandJson/blob/master/rest.html
	$.ajax({
		  url: "http://research-wordpress.dk/wp-json/wp/v2/categories",
	 
		  // The name of the callback parameter, as specified by the YQL service
		  jsonp: "callback",
	 
		  // Tell jQuery we're expecting JSON
		  dataType: "json",
	 
		  // Tell YQL what we want and that we want JSON
		  data: {
		      //q: "select title,abstract,url from search.news where query=\"cat\"",
		      format: "json"
		  },
	 
		  // Work with the response
		  success: function( response ) {
		      console.log( response ); // server response
					//console.log( response[0].title.rendered ); // ok
					//console.log( response.length );

				for( var i = 0; i < response.length; i++){
					//console.log( response[i].title.rendered );
					$('#REST').append( '<h3>' + response[i].name 
						+ '</h3><div class="categoryDescription">' + response[i].description + '</div>');
				}
		  }
	});
	// code end

} )( jQuery ); // jquery end

</script>

<?php get_footer();
