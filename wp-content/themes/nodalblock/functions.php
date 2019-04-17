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

// ACTIONS, OPTIONS AND FILTERS
add_action('wp_enqueue_scripts', 'nodal_enqueue_styles');