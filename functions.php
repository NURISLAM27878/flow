<?php

function flow_theme_setup() {
    	add_theme_support('post-thumbnails');
   $defaults = [
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => [ 'site-title', 'site-description' ],
		'unlink-homepage-logo' => true, 
   ];
	add_theme_support( 'custom-logo', $defaults );

    register_nav_menus( 
	    [
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ]
	);
}
add_action( 'after_setup_theme', 'flow_theme_setup' );





if ( ! function_exists( 'flow_enqueue_all_assets' ) ) {
    function flow_enqueue_all_assets() {
        // Enqueue CSS files in specific order
        wp_enqueue_style('flow-grid', get_template_directory_uri() . '/assets/css/vendor/grid.min.css');
        wp_enqueue_style('flow-owl-carousel', get_template_directory_uri() . '/assets/css/vendor/owl.carousel.min.css');
        wp_enqueue_style('flow-ticker', get_template_directory_uri() . '/assets/css/vendor/ticker-style.css');
        wp_enqueue_style('flow-elegant-icons', get_template_directory_uri() . '/assets/css/vendor/elegant-icons.css');
        wp_enqueue_style('flow-slick', get_template_directory_uri() . '/assets/css/vendor/slick.css');
        wp_enqueue_style('flow-slicknav', get_template_directory_uri() . '/assets/css/vendor/slicknav.css');
        wp_enqueue_style('flow-animate', get_template_directory_uri() . '/assets/css/vendor/animate.min.css');
        wp_enqueue_style('flow-style', get_template_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style('flow-widgets', get_template_directory_uri() . '/assets/css/widgets.css');
        wp_enqueue_style('flow-responsive', get_template_directory_uri() . '/assets/css/responsive.css');

        // Enqueue JavaScript files in specific order
        wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js', array(), '3.5.0', true);
        wp_enqueue_script('jquery');  // WordPress already includes jQuery
        wp_enqueue_script('color-modes', get_template_directory_uri() . '/assets/js/vendor/color-modes.js', array('jquery'), null, true);
        wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array('jquery'), null, true);
        wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/vendor/jquery.slicknav.js', array('jquery'), null, true);
        wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/vendor/slick.min.js', array('jquery'), null, true);
        wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/vendor/wow.min.js', array('jquery'), null, true);
        wp_enqueue_script('scrollUp', get_template_directory_uri() . '/assets/js/vendor/jquery.scrollUp.min.js', array('jquery'), null, true);
        wp_enqueue_script('theia-sticky', get_template_directory_uri() . '/assets/js/vendor/jquery.theia.sticky.js', array('jquery'), null, true);
        wp_enqueue_script('flow-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    }
    add_action( 'wp_enqueue_scripts', 'flow_enqueue_all_assets', 20 );
}