<?php if (is_archive() ) { ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- <header class="entry-header"> -->
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<div id="post" class="catering-image" style="background: url('<?php echo $thumb['0'];?>') center bottom no-repeat; background-size: cover">
				<?php echo "<h3 class='menu-title white-text'>".get_the_title()."</h3>" ?>
				<div class="arrow-down"><img class="down-chevron" src="<?php echo get_bloginfo('stylesheet_directory') ?>/assets/images/Icons/down-chevron.png"></div>
			</div>		
		<!-- </header> -->
	</article>

<?php }?>
