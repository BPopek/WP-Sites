<?php 
/**
 * Plugin Name: Single Page Content Plus Page
 * Description: Adds a sidebar to single category pages
 * Version: 0.1.0
 * Author: Betsy Popek
 * Author URI: https://www.betsypopek.com
 * Text Domain: spcpp
 * License: GPL-2.0+
 */

 //If this file is called directly, abort
 if ( !defined('ABSPATH') ) {
     die;
 }

 add_action('wp_enqueue_scripts', 'spcpp_stylesheet');

/**
 * loads plugin stylesheet on login page
 */
function spcpp_stylesheet() {
    if ( apply_filters( 'spcpp_load_styles', true) )
        //load stylesheet
        wp_enqueue_style( 'spcpp-custom-stylesheet', plugin_dir_url(__FILE__) . 'spcpp-styles.css' );
}
//to remove stylesheet:
    // add_filter( 'spcpp_load_styles', '__return_false')


add_action( 'widgets_init', 'spcpp_register_sidebar');
//registers sidebar below

function spcpp_register_sidebar() {
    //uses register_sidebar hook
    register_sidebar( array(
        'name' => __('Single Page Content Plus Page', 'spcpp'),
        'id' => 'spcpp-sidebar-page',
        'description' => __('Widgets in this area display on category pages.', 'spcpp'),
        'before_widget' => '<div class="widget spcpp-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle spcpp-title">',
        'after_title' => '</h2>',
    )    );
}

//filter to check which posts to display the sidebar
add_filter('astra_archive_page_info', 'spcpp_display_sidebars');

function spcpp_display_sidebars( $content ) {
//    if ( is_category() && is_page( $page = array( 'tips', 'employee-bikes', 'category' ) ) && is_active_sidebar('spcpp-sidebar-page') && is_main_query() ) {
//         dynamic_sidebar( 'spcpp-sidebar-page' );
//     } 
    if( is_archive()) {
            dynamic_sidebar( 'spcpp-sidebar-page' );
    }
    return $content;
}
