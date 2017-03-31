<?php if (is_archive() ) { ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="faq">
			<img class="down-chevron" src="<?php echo get_bloginfo('stylesheet_directory') ?>/assets/images/Icons/down-chevron.png">
			<?php echo "<h4 class='faq-question'>".get_the_title()."</h4>" ?>		
		</div>
	</article>

<?php }?>