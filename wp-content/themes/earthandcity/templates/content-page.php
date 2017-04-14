
<section class="container-fluid contentmarginTop">
	<div class="row ">
		<div class="col-sm-6 contentPaddingleft ">
			<?php the_content(); ?>
		</div>
		<div class="col-sm-5 contentPaddingleft">
			
			<img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid contentimageWidth" alt="Responsive image">
			<p class=""> <?php  echo get_field("image_text");?>	</p> 
			<?php if ( get_field('second_image') != ""): ?>
				<img src="<?php echo get_field('second_image') ?>" class="img-fluid contentimageWidth" alt="Responsive image">
				<p class=""> <?php  echo get_field("second_image_text");?>	</p> 

			<?php endif ?>
			
		</div>
	
	</div>
</section>





 <!-- style="background: url('<?php echo get_the_post_thumbnail_url() ?>'); background-size: contain; background-repeat: no-repeat; 
						 " -->