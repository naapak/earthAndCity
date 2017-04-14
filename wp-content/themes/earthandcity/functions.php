<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'Options-Framework-master/functions.php', // theme options
  'lib/banner.php' // I haz benner
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);




function my_acf_google_map_api( $api ){
  
  $api['key'] = 'AIzaSyCOEds4ATBaAPDSP7aLwT6Q8pNxOIsJ9fw';
  
  return $api;
  
}


// function setBGMPDefaultIcon( $iconURL )
// {
//     return get_bloginfo( 'stylesheet_directory' ) . '/assets/images/pin.png';
// }
// add_filter( 'bgmp_default-icon', 'setBGMPDefaultIcon' );


//==========================================//
//----------- Pre-Query Filter -------------//
//==========================================//

/* UNIQUE COURSE QUERY since v1.0.0
- Query by tax and search if URL PARAMS have been set
- if they have not been set serve remaining posts and sort based on the tax "impact"
*/

add_filter( 'pre_get_posts', 'tester' );
function tester( $query ) {
    if (is_post_type_archive('ourimpact') && !is_admin() && ($query->is_main_query())) {

        $query->set( 'orderby', 'impact' );
        add_filter('posts_clauses', 'posts_clauses_with_tax', 10, 2);

    }
}

// action ourimpact_pre_query since v1.0.0
// handles part of the course archive query
// groups ourimpact by taxonomy "disipline"
// this allows them to show in correct order on the archive page
function posts_clauses_with_tax( $clauses, $wp_query ) {
    global $wpdb;
    //array of sortable taxonomies
    $taxonomies = array('impact', 'ourimpact');
    echo array('impact');
    // check to make sure we are ordering a taxonomy term
    if (isset($wp_query->query_vars['orderby']) && in_array($wp_query->query_vars['orderby'], $taxonomies)) {
        $clauses['join'] .= "
            LEFT OUTER JOIN {$wpdb->term_relationships} AS rel2 ON {$wpdb->posts}.ID = rel2.object_id
            LEFT OUTER JOIN {$wpdb->term_taxonomy} AS tax2 ON rel2.term_taxonomy_id = tax2.term_taxonomy_id
            LEFT OUTER JOIN {$wpdb->terms} USING (term_id)
        ";
        $clauses['where'] .= " AND (taxonomy = '{$wp_query->query_vars['orderby']}' OR taxonomy IS NULL)";
        $clauses['orderby']  = "wp_terms.name";
    }
    return $clauses;
}


/****** Register Custom Navigation Walker ******/

require_once('wp-bootstrap-navwalker.php');

register_nav_menus( 
  array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
    )
  );

register_nav_menus( 
  array(
    'mobile' => __( 'Mobile Menu', 'THEMENAME' ),
    )
  );


register_nav_menus( array(  
  'Footer' => __('Footer', 'THEMENAME')  
) );


function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);



