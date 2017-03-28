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


      <header class="banner navbar navbar-default navbar-static-top" role="banner">

        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

      <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">


          <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true">"h3ehkjr"</span>


          <a href="#" class="socialMediaIcons"><i class="fa fa-facebook-square">&#160;&#160;</i></a>
                      <a href="#" class="socialMediaIcons"><i class="fa fa-twitter-square">&#160;&#160;</i></a>
                      <a href="#" class="socialMediaIcons"><i class="fa fa-google-plus-square"></i></a>

          <div>
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>

          </div>

        <!-- Logo image that only loads when not mobile -->
        <div class="hidden-sm-down">
          <img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/Logo/logocircle.svg" alt="Earth + City Logo">
        </div> 

        <nav id="site-navigation" class="main-navigation flex" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav>
      </header>

              <!-- <div id="dropDownOverride" class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Impact</a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Zero Waste</a>
                  <a class="dropdown-item" href="#">Local Food Procurement</a>
                  <a class="dropdown-item" href="#">Systems Thinking</a>
                </div>
              </div> -->

    </div>

