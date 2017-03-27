<p>I am in the taxonomy-venue.php</p>


<?php
            $tax = get_object_taxonomies (array ('locations', "venue"));
            // var_dump($tax);
              $terms = get_terms($tax, array('hide_empty' => false,)); 
              // print_r($terms);

             ?> 
			 <div class="flex textCenter productsType caps teal-navi">
 		 		<?foreach ($terms as $term) : ?>

 		 		 <?php 
 		 			// echo get_term_link($term); ?> 
 		 		 <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name ?></a>
 		 		<? endforeach; ?>
 		 	</div> 

 <?php if ( have_posts() ) : ?>

			<header class="page-header textCenter">
				<?php
					$taxonomies = $wp_query->get_queried_object();
					// echo $tax->name;
					// print_r($taxonomies);
				?>
					<h1 class="caps"><?php echo $taxonomies->name?></h1>
 		 			<p><?php echo $taxonomies->description?></p>

 		 	<div class="inputValue">
 		 	<form method="post" id="geocoding_form" class="form-inline textCenter" >
		          <div class="input form-group">
		            <input type="text" id="addressInput" name="address" placeholder="Address or Postal Code">
		            <input type="submit" class="btn" id="geocoding_form_btn" value="Search">
		          </div>
        	</form>
        	</div>
            
	</div class="container">
 		 			
			</header><!-- .page-header -->
			<?php endif; ?>		


            <div class="row">
            <div class="col-md-6">
            <?php   $markers_array = array(); ?>
  				<?php while ( have_posts() ) : the_post(); ?>
 					
 				<article id="post-<?php the_ID(); ?>" class=" "  <?php post_class(); ?>>
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
			</div>

			<div id="googleMaps" style="width:500px; height:500px;" class="col-md-6">
				
				<?php
								$translation_array = array(
					'Mainlongitude' => get_field("longitude"),
					'Mainlatittude' => get_field("latitude"),
				);
				wp_localize_script( 'gmapsfunctions/js', 'venue', $translation_array );

				 ?>

			</div>
	</div>
