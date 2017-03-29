<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function get_post_args($category) {

    $labels = array(
        'name'               => _x( $category, 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( $category, 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( $category, 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( $category, ' add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New ', $category, 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New '. $category, 'your-plugin-textdomain' ),
        'new_item'           => __( 'New ' . $category, 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit ' . $category, 'your-plugin-textdomain' ),
        'view_item'          => __( 'View ' . $category, 'your-plugin-textdomain' ),
        'all_items'          => __( 'All '.$category, 'your-plugin-textdomain' ),
        'search_items'       => __( "Search $category", 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( "Parent $category".":", 'your-plugin-textdomain' ),
        'not_found'          => __( 'No '.$category.' found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No '.$category.' found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
               'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        // 'rewrite'            => array( 'slug' => $category ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
    );

    return $args;
}

// function footer_widget_init() {
//     register_sidebar( array(
//         'name'          => esc_html( 'footerMenu' ),
//         'id'            => 'footerMenu',
//         'description'   => '',
//         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//         'after_widget'  => '</aside>',
//         'before_title'  => '<h2 class="widget-title">',
//         'after_title'   => '</h2>',
//     ) );
// }
// add_action( 'wp_register_footer_widget', 'footer_widget_init' );

