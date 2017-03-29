<?php if (is_archive() ) { ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="faq">
			<header class="entry-header">
				<?php echo "<h4 class='faq-question'>".get_the_title()."</h4>" ?>		
			</header>
		</div>
	</article>

<?php }?>