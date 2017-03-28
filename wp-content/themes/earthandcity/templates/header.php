<!-- <h1>This is header.php</h1> -->
<?php
/*
Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
  </head>

    <body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

      <header id="masthead" class="site-header" role="banner">
        <div class="site-branding flex"></div>
        

        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true">"h3ehkjr"</span>

        <div>
        <!-- <button type="button" class="btn btn-default" aria-label="Left Align"> -->
          <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        <!-- </button> -->
        </div>

        <!-- Logo image that only loads when not mobile -->
       <!--  <div class="hidden-sm-down">
          <img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/Logo/logocircle.svg" alt="Earth + City Logo">
        </div>  -->

        <nav id="site-navigation" class="main-navigation flex" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav>
      </header>
