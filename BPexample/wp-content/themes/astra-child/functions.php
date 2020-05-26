<?php 
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

// function get_the_category_by_ID( $cat_ID ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionNameInvalid
//     $cat_ID   = (int) $cat_ID;
//     $category = "Category: " . get_term( $cat_ID );
 
//     if ( is_wp_error( $category ) ) {
//         return $category;
//     }
 
//     return $category ? $category->name : '';
// }
// add_filter('astra_post_categories', 'get_the_category_by_ID');


function astra_post_categories( $output_filter = '' ) {

    $output = '';

    /* translators: used between list items, there is a space after the comma */
    $categories_list = get_the_category_list( __( ', ', 'astra' ) );

    if ( $categories_list ) {
        $output .= '<span class="cat-links">' . "Category: " . $categories_list . '</span>';
    }

    return apply_filters( 'astra_post_categories', $output, $output_filter );
}

