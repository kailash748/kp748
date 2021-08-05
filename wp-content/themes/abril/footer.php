<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abril
 */

/**
 *
 * @hooked abril_footer_start
 */
do_action( 'abril_action_before_footer' );

/**
 * Hooked - abril_footer_top_section -10
 * Hooked - abril_footer_section -20
 */
do_action( 'abril_action_footer' );

/**
 * Hooked - abril_footer_end. 
 */
do_action( 'abril_action_after_footer' );

wp_footer(); ?>

</body>  
</html>