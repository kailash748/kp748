<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abril
 */
/**
* Hook - abril_action_doctype.
*
* @hooked abril_doctype -  10
*/
do_action( 'abril_action_doctype' );
?>
<head>
<?php
/**
* Hook - abril_action_head.
*
* @hooked abril_head -  10
*/
do_action( 'abril_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<?php

/**
* Hook - abril_action_before.
*
* @hooked abril_page_start - 10
*/
do_action( 'abril_action_before' );

/**
*
* @hooked abril_header_start - 10
*/
do_action( 'abril_action_before_header' );

/**
*
*@hooked abril_site_branding - 10
*@hooked abril_header_end - 15 
*/
do_action('abril_action_header');

/**
*
* @hooked abril_content_start - 10
*/
do_action( 'abril_action_before_content' );

/**
 * Banner start
 * 
 * @hooked abril_banner_header - 10
*/
do_action( 'abril_banner_header' );  
