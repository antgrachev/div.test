<?php
if (! defined('ABSPATH')) {
	exit;
}

add_action( 'wp_enqueue_scripts', 'site_scripts');
function site_scripts() {
    wp_dequeue_style( 'wp-block-library' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css', array('swiper') );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', false, 'null', true);
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'swiper'), 'null', true);

   

};
	add_action( 'after_setup_theme', function(){
		register_nav_menus( [
			'menu' => 'Menu'
		] );
	} );

    add_action( 'after_setup_theme', 'theme_custom' );

	add_action('acf/init', function () {
		acf_add_options_page([
			'page_title' => 'Настройки сайта (шапка, подвал)',
			'menu_title' => 'Настройки сайта',
			'menu_slug' => 'site-settings',
			'capability' => 'manage_options',
			'position' => 90,
			'icon_url' => 'dashicons-admin-generic',
		]);
	});

    function theme_custom() {
//        register_nav_menu( 'menu_main_header', 'Меню в шапке' );
        add_theme_support('post-thumbnails');
	    add_theme_support('title-tag');
	    add_theme_support('custom-logo');
	    add_theme_support('menus');

    }


//
   

function var_dumper($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";

}





