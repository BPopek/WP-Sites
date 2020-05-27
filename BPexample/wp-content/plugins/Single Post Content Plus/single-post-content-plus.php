<?php 
/**
 * Plugin Name: Single Post Content Plus
 * Description: Adds a sidebar to single posts (not pages)
 * Version: 0.1.0
 * Author: Betsy Popek
 * Author URI: https://www.betsypopek.com
 * Text Domain: spcp
 * License: GPL-2.0+
 */

 //If this file is called directly, abort
 if ( !defined('ABSPATH') ) {
     die;
 }

 add_action('wp_enqueue_scripts', 'spcp_stylesheet');

/**
 * loads plugin stylesheet on login page
 */
function spcp_stylesheet() {
    if ( apply_filters( 'spcp_load_styles', true) )
        //load stylesheet
        wp_enqueue_style( 'spcp-custom-stylesheet', plugin_dir_url(__FILE__) . 'spcp-styles.css' );
}
//to remove stylesheet:
    // add_filter( 'spcp_load_styles', '__return_false')


add_action( 'widgets_init', 'spcp_register_sidebar');
//registers sidebar below

function spcp_register_sidebar() {
    //uses register_sidebar hook
    register_sidebar( array(
        'name' => __('Post Content Plus', 'spcp'),
        'id' => 'spcp-sidebar',
        'description' => __('Widgets in this area display on single posts but not pages.', 'spcp'),
        'before_widget' => '<div class="widget spcp-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle spcp-title">',
        'after_title' => '</h2>',
    )    );
}

//filter to check which posts to display the sidebar
add_filter('the_content', 'spcp_display_sidebars');

function spcp_display_sidebars( $content ) {
    //is_single  checks just for single posts
    //is_singular checks for single posts OR pages
    //is_active_sidebar checks if there are any widgets in sidebar area
    //is_main_query checks if this is the main query

    if ( is_single() && is_active_sidebar('spcp-sidebar') && is_main_query() ) {
        dynamic_sidebar( 'spcp-sidebar' );
    } 
    return $content;
}
