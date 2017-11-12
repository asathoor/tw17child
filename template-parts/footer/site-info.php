<?php
/**
 * Displays footer site info
 * Here is the file you are looking for if you want to get rid of "Powered by ..."
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
    <strong> 
        &copy; Per Thykjær Jensen <?php echo date('Y'); ?>
    </strong><br>
    
    Theme: 
    
    <a href="https://github.com/asathoor/tw17child">
        tw17child 
    </a>
    
    based on the core theme Twenty Seventeen.<br>
    
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tw17barn_digiday' ) ); ?>">
        <?php printf( __( 'Proudly powered by %s', 'tw17barn_digiday' ), 'WordPress' ); ?>
    </a>.
    
</div><!-- .site-info -->