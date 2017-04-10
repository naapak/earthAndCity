<?php wp_head(); ?>
  

<?php global $smof_data; ?>

<!-- banner -->
  </div class="bannerMain"> 
    <?php new banner; ?>

  </div>
  <div class="mainBody">
    <body <?php body_class(); ?> >    <!-- <div id="page" class="hfeed site"> -->
  
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

      <!-- button to collapse and display mobile-only menu -->
      <button type="button" class="navbar-toggle collapsed menuIcon hidden-md-up" data-toggle="collapse" data-target=".displayMobileMenu">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>


  <div class="flexAlignLogoNav">
      <div > <!-- Logo image that only loads when not mobile -->
        <?php global $smof_data; ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logoIcon hidden-sm-down" alt="Earth + City Logo" src="<?php echo $smof_data['logo']?>"></a>
      </div>
      <div class="flexAlignRight hidden-sm-down"> <!-- social media icons -->
        <?php $frontpage_id = get_option( 'page_on_front' );?>
        <a class="iconMargin" href="<?php echo get_field("facebook", $frontpage_id)?>"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/facebook-logo-button.png" alt="Facebook Link"></a>
        <a class="iconMargin" href="<?php echo get_field("instagram", $frontpage_id)?>"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/instagram.png" alt="Instagram Link" ></a>
        <a class="iconMargin" href="<?php echo get_field("twitter", $frontpage_id)?>"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/twitter-logo-button.png" alt="Twitter Link" ></a>
        <a class="iconMargin" href="<?php echo get_field("email_address", $frontpage_id)?>"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/email.png" alt="Email Link"></a>
        <a class="iconMargin" href="<?php echo get_field("youtube", $frontpage_id)?>"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/youtube-symbol.png" alt="Youtube Link" ></a>
      </div> <!-- end social media icons -->
  </div>   <!-- end logo and social media  -->
        
  <header class="banner navbar navbar-default navbar-static-top" role="banner">
      <div>
          <div class="navbar-header"> <!-- button to collapse and display mobile-only menu -->
            <button type="button" class="navbar-toggle collapsed menuIcon" data-toggle="collapse" data-target=".displayMobileMenu">

              <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
          </div>
              
            <!-- navbar for desktop -->
          <div> 
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
          <div> 
                <nav id="mobile-navigation" class="navbar-collapse main-navigation hidden-md-up displayMobileMenu collapse" role="navigation">

                    <?php
                    wp_nav_menu( array(
                      'menu'              => 'mobile',
                      'theme_location'    => 'mobile',
                      'depth'             => 6,
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
      </div>
  </header>
  </body>
  </div>



