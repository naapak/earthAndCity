<footer class="content-info">

<div class="footerBackground">
	<!-- <div class="clearIt"><?php echo do_shortcode("[instagram-feed]"); ?></div> -->
	<div class="flex footer-flex">
		<div class="footer_sign_up">
			<?php //mailchimpSF_signup_form(); ?>
			
			
			<div class="mobileFooterNav hidden-md-up center">
			  <?php $frontpage_id = get_option( 'page_on_front' );?>
        <a class="iconMargin" href="<?php echo get_field("facebook", $frontpage_id)?>"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/facebook-logo-button.png" alt="Facebook Link"></a>
        <a class="iconMargin" href="<?php echo get_field("instagram", $frontpage_id)?>"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/instagram.png" alt="Instagram Link" ></a>
        <a class="iconMargin" href="<?php echo get_field("twitter", $frontpage_id)?>"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/twitter-logo-button.png" alt="Twitter Link" ></a>
        <a class="iconMargin" href="<?php echo get_field("email_address", $frontpage_id)?>"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/email.png" alt="Email Link"></a>
        <a class="iconMargin" href="<?php echo get_field("youtube", $frontpage_id)?>"><img src="<?php echo get_bloginfo("stylesheet_directory")?>/assets/images/IconsPNG/youtube-symbol.png" alt="Youtube Link" ></a>
			</div>


			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup">
				<form action="//earthandcity.us9.list-manage.com/subscribe/post?u=0d5ee7dafe74014c19b7248e3&amp;id=9df49b8429" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">
						<div class="mc-field-group">
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter email...">
							<input type="submit" value="Sign up" name="subscribe" id="mc-embedded-subscribe" class="button signUpButton">
						</div>
						
					<div class="mc-field-group input-group"></div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0d5ee7dafe74014c19b7248e3_9df49b8429" tabindex="-1" value=""></div>
				    
				    </div>
				</form>
			</div>
			<!--End mc_embed_signup-->
		</div>
		<div class="footer">
		<?php dynamic_sidebar( 'footer' ); ?> 
		</div>

		
		
</div>
	<div class="copyrightLine">&#169;&#160;2017 Earth + City</div>

</footer>
