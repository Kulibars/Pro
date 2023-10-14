<?php

function pro_setup() {
    
    load_theme_textdomain('pro');
    
    add_theme_support('title-tag');
    
    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 220,
        'flex-height' => true
));
}
add_action('after_setup_theme', 'pro_setup');


function pro_scripts() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.min.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
    wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.css' );
    wp_enqueue_style( 'boostrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jQuery-3.7.1', get_template_directory_uri() . '/js/jQuery-3.7.1.js');
    wp_enqueue_script( 'css3-animate-it', get_template_directory_uri() . '/js/css3-animate-it.js');
    wp_register_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jQuery-3.7.1'), null, false);
    wp_enqueue_script('bootstrap.min');
    wp_enqueue_script( 'agency', get_template_directory_uri() . '/js/agency.js');
    wp_enqueue_script( 'jquery-easing.min', get_template_directory_uri() . '/js/jquery.easing.min.js');
    wp_register_script( 'slick.min', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jQuery-3.7.1'), null, false);
    wp_enqueue_script('slick.min');
    wp_register_script( 'myscript', get_stylesheet_directory_uri() . '/js/myscript.js', array('jQuery-3.7.1'), null, false);
    wp_enqueue_script('myscript');

}
add_action( 'wp_enqueue_scripts', 'pro_scripts' );