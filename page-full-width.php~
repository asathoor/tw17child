<?php 
/**
 * Template Name: Full Width
 * Based on: page.php
 **/
 get_header(); ?>

<!-- from: page-full-width.php -->
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- from page.php -->
            
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