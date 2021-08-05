<?php
/**
 * abril Theme Customizer
 *
 * @package abril
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function abril_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Load customize sanitize.
	include get_template_directory() . '/inc/customizer/sanitize.php';

	// Load customize sanitize.
	include get_template_directory() . '/inc/customizer/active-callback.php';

	// Load topbar sections option.
	include get_template_directory() . '/inc/customizer/topbar.php';

	// Load header sections option.
	include get_template_directory() . '/inc/customizer/theme-section.php';
	
}
add_action( 'customize_register', 'abril_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function abril_customize_preview_js() {
	wp_enqueue_script( 'abril_customizer', get_template_directory_uri() . '/inc/customizer/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'abril_customize_preview_js' );
/**
 *
 */
function abril_customize_backend_scripts() {

	wp_enqueue_style( 'abril-fontawesome-all', get_template_directory_uri() . '/assets/css/all.css' );

	wp_enqueue_style( 'abril-admin-customizer-style', get_template_directory_uri() . '/inc/customizer/css/customizer-style.css' );

	wp_enqueue_script( 'abril-admin-customizer', get_template_directory_uri() . '/inc/customizer/js/customizer-script.js', array( 'jquery', 'customize-controls' ), '20151215', true );
}
add_action( 'customize_controls_enqueue_scripts', 'abril_customize_backend_scripts', 10 );

if ( ! function_exists( 'abril_inline_css' ) ) :
	// Add Custom Css
	function abril_inline_css() {
		
		$custom_theme_color 						= abril_get_option('custom_theme_color' );
		$top_bar_color 								= abril_get_option('top_bar_color' );
		$h1_font_size 								= abril_get_option('h1_font_size' );
		$h2_font_size 								= abril_get_option('h2_font_size' );
		$h3_font_size 								= abril_get_option('h3_font_size' );
		$h4_font_size 								= abril_get_option('h4_font_size' );
		$h5_font_size 								= abril_get_option('h5_font_size' );
		$h6_font_size 								= abril_get_option('h6_font_size' );
		$body_font_size 							= abril_get_option('body_font_size' );
		$body_line_height 							= abril_get_option('body_line_height' );

		$custom_theme_color_css = '';
		if ( ( '#2196f3' == $custom_theme_color ) ) {
			$custom_theme_color = '';
		}

		$custom_theme_color_css = '

		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		#top-bar,
		.main-navigation ul.nav-menu > li > a > i,
		.main-navigation ul.nav-menu > li > a > i.wpmi-icon:not(.wpmi-label-1).wpmi-position-before,
		.main-navigation ul ul li > a > i,
		.menu-toggle:hover,
		.menu-toggle:focus,
		.pagination .page-numbers.current,
		.pagination .page-numbers:hover,
		.pagination .page-numbers:focus,
		.tags-links a,
		.reply a,
		.btn,
		.slick-prev,
		.slick-next,
		.slick-dots li button:hover,
		.slick-dots li.slick-active button,
		#featured-gallery .featured-image:before,
		#featured-classes .featured-classes-item,
		#featured-team .slick-arrow,
		#featured-testimonial .slick-dots li.slick-active button,
		.video-button i,
		.blog-posts-wrapper .date a,
		.widget_tag_cloud .tagcloud a,
		#colophon .widget_search form.search-form button.search-submit {
		    background-color: '.esc_attr( $custom_theme_color ).';
		}

		.logged-in-as a:hover,
		.logged-in-as a:focus,
		a,
		.main-navigation ul.nav-menu > li:hover > a,
		.main-navigation ul.nav-menu > li.focus > a,
		.main-navigation ul.nav-menu .current_page_item > a,
		.main-navigation ul.nav-menu .current-menu-item > a,
		.main-navigation ul.nav-menu .current_page_ancestor > a,
		.main-navigation ul.nav-menu .current-menu-ancestor > a,
		.post-navigation a:hover, 
		.posts-navigation a:hover,
		.post-navigation a:focus, 
		.posts-navigation a:focus,
		.pagination .page-numbers,
		.pagination .page-numbers.dots:hover,
		.pagination .page-numbers.dots:focus,
		.pagination .page-numbers.prev,
		.pagination .page-numbers.next,
		#secondary a:hover,
		#secondary a:focus,
		.page-header small,
		.post-categories a,
		.cat-links:before,
		.entry-meta a:hover,
		.entry-meta a:focus,
		.comment-meta .url:hover,
		.comment-meta .url:focus,
		.comment-metadata a:hover,
		.comment-metadata a:focus,
		.comment-metadata a:hover time,
		.comment-metadata a:focus time,
		.section-title,
		.entry-title a:hover,
		.entry-title a:focus,
		.video-button a:hover i,
		.video-button a:focus i,
		.blog-posts-wrapper .sticky .post-item .entry-title a:hover,
		.blog-posts-wrapper .sticky .post-item .entry-title a:focus,
		#colophon a:hover,
		#colophon a:focus {
		    color: '.esc_attr( $custom_theme_color ).';
		}

		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.widget_search form.search-form input[type="search"]:focus,
		.tags-links a,
		.reply a,
		.btn,
		#featured-gallery .featured-gallery-item {
		    border-color: '.esc_attr( $custom_theme_color ).';
		}

		#secondary ul li a:hover,
		#secondary ul li a:focus {
		    border-bottom-color: '.esc_attr( $custom_theme_color ).';
		}

		#top-bar {
		    background-color: '.esc_attr( $top_bar_color ).';
		}

		h1 {
			font-size: '.esc_attr( $h1_font_size ).'px;
		}

		h2 {
			font-size: '.esc_attr( $h2_font_size ).'px;
		}

		h3 {
			font-size: '.esc_attr( $h3_font_size ).'px;
		}

		h4 {
			font-size: '.esc_attr( $h4_font_size ).'px;
		}

		h5 {
			font-size: '.esc_attr( $h5_font_size ).'px;
		}

		h6 {
			font-size: '.esc_attr( $h6_font_size ).'px;
		}

		body,
		button,
		input,
		select,
		textarea {
			font-size: '.esc_attr( $body_font_size ).'px;
			line-height: '.esc_attr( $body_line_height ).'px;
		}

		@media screen and (min-width: 1024px) {
			.main-navigation ul.nav-menu .current_page_item > a, 
		    .main-navigation ul.nav-menu .current-menu-item > a, 
		    .main-navigation ul.nav-menu .current_page_ancestor > a, 
		    .main-navigation ul.nav-menu .current-menu-ancestor > a,
		    .main-navigation ul.nav-menu > li:hover > a, 
		    .main-navigation ul.nav-menu > li.focus > a {
		        color: '.esc_attr( $custom_theme_color ).';
		    }
		    .main-navigation ul ul li:hover > a,
		    .main-navigation ul ul li.focus > a {
		        background-color: '.esc_attr( $custom_theme_color ).';
		        color: #fff;
		    }
		}
		';
			
		$css = $custom_theme_color_css;	
		wp_add_inline_style( 'abril-style', $css );
	}
endif;
add_action( 'wp_enqueue_scripts', 'abril_inline_css', 10 );