<?php
/**
 * file: functions.php
 * @package: WordPress
 * @sub-package: tw17child
 */


/**
 * Styles: both parent and child
 */
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, 
			get_template_directory_uri() 
			. '/style.css' );

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

		// animate.css
    wp_enqueue_style( 'animate-css',
        get_stylesheet_directory_uri() . '/animate.css',
        '1.0'
    );

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * Costum SEO Hook
 */
function petj_SEO_hook() {

	// Bloginfo @url: https://developer.wordpress.org/reference/functions/bloginfo/

	?>
	<!-- from the peth_SEO_hook -->
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- do similar stuff from here -->
		<meta name="keywords" content="HTML,CSS,XML,JavaScript">
		<meta name="author" content="John Doe">
	<?php
}

add_action( 'do_petj_SEO' , 'petj_SEO_hook' );
// Activate the hook, somewhere ...
// do_action( 'do_petj_SEO_hook' );
// see: header.php


/**
 * Add more buttons to Tiny MCEditor
 * @url: https://codex.wordpress.org/TinyMCE_Custom_Buttons
 */
function my_mce_buttons_2( $buttons ) {	
	/**
	 * Add in a core button that's disabled by default
	 */
	$buttons[] = 'superscript';
	$buttons[] = 'subscript';
	$buttons[] = 'fontselect';
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'subscript';
	$buttons[] = 'styleselect';
	$buttons[] = 'backcolor';
	$buttons[] = 'cut';
	$buttons[] = 'copy';
	$buttons[] = 'paste';
	$buttons[] = 'charmap';

	return $buttons;
}
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

/**
 * Remove Head Junk
 * @url: https://scotch.io/tutorials/removing-wordpress-header-junk
 */
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
//remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
?>
