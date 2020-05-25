<?php

/** 
 * Plugin Name: Custom WP Login
 * Version: 0.1
 * Author: Betsy Popek
 * License: GPL2+
 * Text Domain: cwpl 
*/
 
add_action('login_enqueue_scripts', 'cwpl_login_stylesheet');

/**
 * loads custom stylesheet on login page
 */
function cwpl_login_stylesheet() {
    //load stylesheet
    wp_enqueue_style( 'cwpl-custom-stylesheet', plugin_dir_url(__FILE__) . 'login-styles.css' );
}

add_filter('login_errors', 'cwpl_error_message');
//returns custom error message 
function cwpl_error_message () {
    return 'Information provided was incorrect';
}