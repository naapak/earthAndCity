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
  'lib/customizer.php' // Theme customizer
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

// add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// function setBGMPDefaultIcon( $iconURL )
// {
//     return get_bloginfo( 'stylesheet_directory' ) . '/assets/images/pin.png';
// }
// add_filter( 'bgmp_default-icon', 'setBGMPDefaultIcon' );


// Register Custom Navigation Walker
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



