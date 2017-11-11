<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header-full-width">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <?php twentyseventeen_edit_link( get_the_ID() ); ?>
                </header><!-- .entry-header -->
                <div class="entry-content-full-width">
                    <?php
                        the_content();
                        wp_link_pages( array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
                            'after'  => '</div>',
                        ) );
                    ?>
                </div><!-- .entry-content -->
            </article><!-- #post-## -->
            
            <!-- end -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();

