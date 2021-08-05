<?php
/**
 * Default theme options.
 *
 * @package abril
 */

if ( ! function_exists( 'abril_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function abril_get_default_theme_options() {

	$defaults = array();

	// Top Bar
	$defaults['show_header_contact_info'] 		= false;
    $defaults['show_header_social_links'] 		= false;
    $defaults['header_social_links']			= array();

	// Colors
	$defaults['top_bar_color'] 							= '#BF354B';
	$defaults['custom_theme_color'] 					= '#BF354B';

	// Theme Options
	$defaults['layout_options_blog']					= 'no-sidebar';
	$defaults['layout_options_archive']					= 'no-sidebar';
	$defaults['layout_options_page']					= 'no-sidebar';	
	$defaults['layout_options_single']					= 'right-sidebar';	
	$defaults['excerpt_length']							= 25;
	$defaults['readmore_text']							= esc_html__('Learn More','abril');
	$defaults['show_blog_posts_image']		    		= 'image-enable';
	$defaults['show_blog_posts_category']				= 'category-enable';
	$defaults['show_blog_posts_title']		    		= 'title-enable';
	$defaults['show_blog_posts_content']				= 'content-enable';
	$defaults['show_blog_posts_button']		    		= 'button-enable';

	//Footer section 		
	$defaults['copyright_text']							= esc_html__( '&copy; Copyright 2021 abril. All Rights Reserved.', 'abril' );

	// Pass through filter.
	$defaults = apply_filters( 'abril_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'abril_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function abril_get_option( $key ) {

		$default_options = abril_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;