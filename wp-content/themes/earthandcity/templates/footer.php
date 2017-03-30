<footer class="content-info">

<div class="footerBackground">
	<div class="flex">
		<div class="footer_sign_up">
			<?php mailchimpSF_signup_form(); ?>
		</div>

		<?php dynamic_sidebar( 'footer' ); ?>

		<div class="flexAlignRight">
		  <a class="iconMargin" href="https://www.facebook.com/earthandcity/"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/facebook-logo-button.png" alt="Facebook Link" width="42" height="42" border="0"></a>
		  <a class="iconMargin" href="https://www.instagram.com/earthandcity/?hl=en"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/instagram.png" alt="Instagram Link" width="42" height="42" border="0"></a>
		  <a class="iconMargin" href="https://twitter.com/earthandcity?lang=en"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/twitter-logo-button.png" alt="Twitter Link" width="42" height="42" border="0"></a>
		  <a class="iconMargin" href="mailto:info@earthandcity.ca"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/email.png" alt="Email Link" width="42" height="42" border="0"></a>
		  <a class="iconMargin" href="https://www.youtube.com/channel/UCu9u-ve4f4zDlMLMxtpYqbQ"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/youtube-symbol.png" alt="Youtube Link" width="42" height="42" border="0"></a>
		</div>
	</div>

	<div class="copyrightLine">&#169;&#160;2017 Earth + City</div>
</div>

<?php wp_footer(); ?>

</footer>
