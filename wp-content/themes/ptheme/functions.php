<?php 

function load_scripts(){
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/proto/app/assets/styles/styles.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/proto/app/assets/js/vendor/jquery-3.5.1.min.js', array('jquery'), '3.5.1', 'all' , true );
	wp_enqueue_script( 'headroom-min', get_template_directory_uri() . '/proto/app/assets/js/vendor/headroom.min.js', array('jquery'), '1.0', 'all' , true );
	wp_enqueue_script( 'Aos', get_template_directory_uri() . '/proto/app/assets/js/vendor/aos.js', array('jquery'), '1.0.0', 'all', true );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/proto/app/assets/js/vendor/bootstrap.min.js', array('jquery'), '1.0', 'all' , true );
    wp_enqueue_script( 'App', get_template_directory_uri() . '/proto/app/assets/js/min/app.min.js', array('jquery'), 'all', true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );