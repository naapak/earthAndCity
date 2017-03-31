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
    <!-- canary -->
    <!-- declares smof to be available for use, logo is being dynamically loaded through smof -->
    <?php global $smof_data; ?>
    
    <body <?php body_class(); ?>>
    <!-- <div id="page" class="hfeed site"> -->
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

      <!-- button to collapse and display mobile-only menu -->
      <button type="button" class="navbar-toggle collapsed menuIcon hidden-md-up" data-toggle="collapse" data-target=".displayMobileMenu">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- social media icons -->
      <div class="flexAlignRight hidden-sm-down">
        <a class="iconMargin" href="https://www.facebook.com/earthandcity/"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/facebook-logo-button.png" alt="Facebook Link" width="42" height="42" border="0"></a>
        <a class="iconMargin" href="https://www.instagram.com/earthandcity/?hl=en"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/instagram.png" alt="Instagram Link" width="42" height="42" border="0"></a>
        <a class="iconMargin" href="https://twitter.com/earthandcity?lang=en"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/twitter-logo-button.png" alt="Twitter Link" width="42" height="42" border="0"></a>
        <a class="iconMargin" href="mailto:info@earthandcity.ca"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/email.png" alt="Email Link" width="42" height="42" border="0"></a>
        <a class="iconMargin" href="https://www.youtube.com/channel/UCu9u-ve4f4zDlMLMxtpYqbQ"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/youtube-symbol.png" alt="Youtube Link" width="42" height="42" border="0"></a>
      </div>      

      <header class="banner navbar navbar-default navbar-static-top" role="banner">
        <div>
          <div class="navbar-header">

            <!-- button to collapse and display mobile-only menu -->

            <button type="button" class="navbar-toggle collapsed menuIcon" data-toggle="collapse" data-target=".displayMobileMenu">

              <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
          </div>
              
          <div class="flexAlignLogoNav">

            <!-- Logo image that only loads when not mobile -->
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img class="logoIcon hidden-sm-down marginBottom" alt="Earth + City Logo" src="<?php echo $smof_data['logo']?>"></a>
            
            <!-- navbar for desktop -->
              <nav id="desktop-navigation" class="main-navigation hidden-sm-down desktop-nav" role="navigation">

                <?php
                wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker()
                  ));
                ?>
              </nav>
            
          </div>

          <!-- navbar for mobile -->

          <nav id="mobile-navigation" class="navbar-collapse main-navigation hidden-md-up displayMobileMenu collapse" role="navigation">

              <?php
              wp_nav_menu( array(
                'menu'              => 'mobile',
                'theme_location'    => 'mobile',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
                ));
              ?>
            </nav>
        </div>
      </header>

    </div>
    <?php new banner; ?>

    </div>
