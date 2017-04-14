
<?php 
if ( is_post_type_archive('catering') ) { ?>

<?php $term = get_term(12,"venue"); ?> 
	<?php global $smof_data; ?>

	<!-- <h2 class="catering-title"><?php echo $smof_data['archive_catering_title'];?></h2> -->
	<div class="catering-info marginTop paddingTopBottom">
		<?php echo $smof_data['example_textarea']; ?>
	</div>
	<div class="homeButtons">
	<a href="<?php echo get_term_link($term); ?>"><button class="contact-button" type="button"><?php echo $smof_data['archive_catering_button']; ?> </button></a>
	</div>
	<h3 class="catering-subtitle hidden-sm-down"><?php echo $smof_data['archive_catering_subtitle'];?></h3>

<?php } elseif ( is_post_type_archive('faq') ) { ?>
	
	<?php global $smof_data; ?>

	<h2 class="catering-title"><?php echo $smof_data['archive_faq_title'];?></h2>
        
<?php } elseif ( is_post_type_archive('journal') ) {
           
};
?> 