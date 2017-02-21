<?php
/**
 * Styles: both parent and child
 */
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
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
?>
