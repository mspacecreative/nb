<?php

/* LOAD STYLES AND SCRIPTS */
function nodal_enqueue_styles() {

	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.min.css', '', null );
	wp_enqueue_style('normalize');
	
	wp_register_style( 'main-styles', get_template_directory_uri() . '/css/main.css', '', null );
	wp_enqueue_style('main-styles');
	
	wp_register_style( 'hamburger', get_template_directory_uri() . '/css/hamburgers.min.css', '', null );
	wp_enqueue_style('hamburger');
	
	wp_register_style( 'typekit-styles', 'https://use.typekit.net/yyn1xyn.css', '', null );
	wp_enqueue_style('typekit-styles');
	
	wp_register_style( 'parallaxer-styles', get_template_directory_uri() . '/css/parallaxer.css', '', null );
	wp_enqueue_style('parallaxer-styles');
	
	wp_register_script('js-vendor', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array('jquery'), null);
	wp_enqueue_script('js-vendor');
	
	wp_register_script('parallaxer-scripts', get_template_directory_uri() . '/js/parallaxer.js', array('jquery'), null, true);
	wp_enqueue_script('parallaxer-scripts');
	
	wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
	
	wp_register_script('main-scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
	wp_enqueue_script('main-scripts');
}

/* REGISTER MENU */

function nav_registration() {
	register_nav_menus( array(
		'primary-menu'   => esc_html__( 'Primary Menu', 'NodalBlock' )
	) );
}

/* REGISTER ACF BLOCKS */
function my_acf_init() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register icons block
		acf_register_block(array(
			'name'				=> 'title-icons',
			'title'				=> __('Title & Icons'),
			'description'		=> __('Displays a Title and Icons'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'images-alt',
			'keywords'			=> array( 'title', 'icons' ),
		));
		
		// register products block
		acf_register_block(array(
			'name'				=> 'products',
			'title'				=> __('Products Block'),
			'description'		=> __('Showcases Products'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'megaphone',
			'keywords'			=> array( 'products', 'nodalblock' ),
		));
		
		// register articles block
		acf_register_block(array(
			'name'				=> 'news-articles',
			'title'				=> __('News Articles'),
			'description'		=> __('News Article Feed'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-aside',
			'keywords'			=> array( 'news', 'articles' ),
		));
		
		// register half column block
		acf_register_block(array(
			'name'				=> 'one-half',
			'title'				=> __('Half Column Block'),
			'description'		=> __('50/50 column layout'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'screenoptions',
			'keywords'			=> array( 'half', 'column' ),
		));
	}
}

function my_acf_block_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/blocks/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/blocks/content-{$slug}.php") );
	}
}

/* REGISTER THUMBNAILS */
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	add_image_size('large', 700, '', true); // Large Thumbnail
	add_image_size('medium', 250, '', true); // Medium Thumbnail
	add_image_size('small', 120, '', true); // Small Thumbnail
}

/* STYLE GUTENBERG */
function gutenberg_editor_styles() {
	add_theme_support('editor-styles');
	add_editor_style( 'css/gutenberg.css' );
}

// ACTIONS, OPTIONS AND FILTERS
add_action('wp_enqueue_scripts', 'nodal_enqueue_styles');
add_action( 'after_setup_theme', 'nav_registration' );
add_action('acf/init', 'my_acf_init');
add_action('init','gutenberg_editor_styles');