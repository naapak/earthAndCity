<p>I am in the taxonomy-venue.php</p>


<?php
            $tax = get_object_taxonomies (array ('locations', "venue"));
            // var_dump($tax);
              $terms = get_terms($tax, array('hide_empty' => false,)); 
              // print_r($terms);

             ?> 
            
             
             <div class="flex marginBottom" >

             <?foreach ($terms as $term) : ?>
             
			<div class=" col-sm-4 col-md-4 col-lg-4 ">
 		 		
 		 	<a class="btn btn-block linkButton" role="button"  href="<?php echo get_term_link($term); ?>"><?php echo $term->name ?></a>
 		 		
 		 	</div>
 			
 		 	<? endforeach; ?>
			</div>
			
 		 	
 		 	
 		 

 <?php if ( have_posts() ) : ?>

			<header class="page-header textCenter margin marginBottom">
				<?php
					$taxonomies = get_queried_object();
				
					// print_r($taxonomies);
					// usort($taxonomies);
				?>
					<h1 class="caps marginBottom"><?php echo $taxonomies->name?></h1>
 		 			

 		 	<?php  $countingPosts = get_queried_object()->count;
			 if ( $countingPosts > 1) {  ?>
 		 	<form method="post" id="geocoding_form" class="textCenter" >
		          <div class="col-sm-12 textCenter ">
		            <input type="text" id="addressInput" name="address" placeholder="Address or Postal Code">
		            <input type="submit" class="btn " id="geocoding_form_btn" value="Search">
		          </div>
        	</form>
        <?php  }?>  <!-- search bar -->
        	
            
	</div class="container  ">
 		 			
			</header><!-- .page-header -->
			<?php endif; ?>		


            <div class="row marginBottom ">
            <div class="  col-md-5 AddressScroll margin scrolling">
             <?php if ( $countingPosts > 1) {  ?>	
            <p class="grey"> Sorted - Alphabetical</p>
            <?php  }?> 
            <?php   $markers_array = array(); ?>
  				<?php  while ( have_posts() ) : the_post(); ?>
 					
 				<article id="post-<?php the_ID(); ?>" class=""  <?php post_class(); ?>>
					<header class="markerdata">
					<?php if(get_field("website_address") == null) { ?> 
						<p class="bold"><?php echo the_title()?></p>
					<?php } else { ?>
						<a href="https://<?php echo get_field("website_address")?>" class="">
						<?php echo the_title()?>
						</a>
					<?php } ?>
						<p><?php echo the_content()?></p>
					
					<?php    
					array_push($markers_array,
					array('markerlongitude' => get_field("longitude"),
					'markerlatittude' => get_field("latitude"),
					'title' => get_the_title(),
					'content' => wpautop(get_the_content(),true),
					'address' => get_field('address_of_the_location'),
					)
					);
					wp_localize_script( 'gmapsfunctions/js', 'markersvenue', $markers_array );
					?>

					</header><!-- .entry-header -->

				</article><!-- #post-## -->

				<?php endwhile; ?>
			</div> <!-- list of addresses -->


			<div id="googleMaps"  class="col-sm-11 col-md-5 GoogleMargin ">
				<?php
						$queried_object = get_queried_object();
						$taxonomy = $queried_object->taxonomy;
						$term_id = $queried_object->term_id;

						$longitude = get_field( 'longitude', $taxonomy.'_'.$term_id);
						$latitude = get_field( 'latitude', $taxonomy.'_'.$term_id);
						$zoom = get_field('zoom',$taxonomy.'_'.$term_id);

						if( $longitude ) {
						} else {
						    echo 'empty';
						}

								$translation_array = array(
					'Mainlongitude' => $longitude,
					'Mainlatittude' => $latitude,
					'Mainzoom' => $zoom,
				);
								
				wp_localize_script( 'gmapsfunctions/js', 'venue', $translation_array );

				 ?>

			</div> <!-- google maps -->

		

	</div>
