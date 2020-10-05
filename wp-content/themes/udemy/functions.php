<?php

//Setup
//we create a constant to determine weather we are in developement mode or not so we can use it for not usinng cache in dev mode
define( 'JU_DEV_MODE', true );

//Includes
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path( '/includes/setup.php' ) );
include( get_theme_file_path( '/includes/widgets.php' ) );
include( get_theme_file_path( '/includes/theme-customizer.php' ) );
include( get_theme_file_path( '/includes/customizer/social.php' ) );
include( get_theme_file_path( '/includes/customizer/misc.php' ) );

//Hooks (its like an event listener this is where yopu implement the logic to listen to events and execute code. This is what wordpress calls plugins API)
add_action( 'wp_enqueue_scripts', 'ju_enqueue');
add_action('after_setup_theme', 'ju_setup_theme');
add_action( 'widgets_init', 'ju_widgets' );
add_action( 'customize_register', 'ju_customize_register' );

//Shortcodes


?>