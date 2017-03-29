<footer class="content-info">

<div class="footerBackground">
	<?php mailchimpSF_signup_form(); ?>
	<div class="footerNavbar">
		<?php
	    wp_nav_menu( array(
	      'menu'              => 'Footer',
	      'theme_location'    => 'Footer',
	      'depth'             => 0,
	      'container'         => 'div',
	      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
	      'walker'            => new WP_Bootstrap_Navwalker()
	      ));
		?>
	</div>
	<div>
  	<?php wp_nav_menu( array( 'theme_location' => 'Footer' ) ); ?>  
	</div>

	<div class="flexAlignRight">
	  <a class="iconMargin" href="https://www.facebook.com/earthandcity/"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/facebook-logo-button.png" alt="Facebook Link" width="42" height="42" border="0"></a>
	  <a class="iconMargin" href="https://www.instagram.com/earthandcity/?hl=en"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/instagram.png" alt="Instagram Link" width="42" height="42" border="0"></a>
	  <a class="iconMargin" href="https://twitter.com/earthandcity?lang=en"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/twitter-logo-button.png" alt="Twitter Link" width="42" height="42" border="0"></a>
	  <a class="iconMargin" href="mailto:info@earthandcity.ca"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/email.png" alt="Email Link" width="42" height="42" border="0"></a>
	  <a class="iconMargin" href="https://www.youtube.com/channel/UCu9u-ve4f4zDlMLMxtpYqbQ"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/youtube-symbol.png" alt="Youtube Link" width="42" height="42" border="0"></a>
	</div>
</div>

<?php wp_footer(); ?>

</footer>
