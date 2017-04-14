<?php  ?>


<!-- email -->

	

<div  class="paddingTopBottom emailBackground">

	<h5 class="textCenter white" >Sign-up for exclusive offers! </h5>

				<form action="//earthandcity.us9.list-manage.com/subscribe/post?u=0d5ee7dafe74014c19b7248e3&amp;id=9df49b8429" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll" class="col-sm-12 textCenter ">
						<div >
				<input type="email" value="" name="EMAIL" class="emailAddressInput" placeholder="Enter your email address">
						
						
						<input type="submit" value="Join" name="subscribe" class="btn emailJoinbtn">
						</div>
					<div class=" input-group"></div>
					<div class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0d5ee7dafe74014c19b7248e3_9df49b8429" tabindex="-1" value=""></div>
				    
				    </div>
				</form>
		
         <!-- search bar -->
</div>


<!-- impact -->

       <h1 class="textCenter black categories marginTop  "> Let's make an impact, together  </h1>
       <?php   $terms = get_terms(array("impact"));

        ?>
 			
 		 	<div class="flexContent textCenter marginTop">
 		 		<?foreach ($terms as $term) : ?>

 <!-- style="background: url('<?php the_field('image10', $term) ?>');" -->
 		 		<div class="shopCategories" >
 		 			<a href="<?php echo get_term_link($term); ?>">

  		 			<img src="<?php the_field('image10', $term) ?>">
  		 			<h2 class="home2Button"><?php echo $term->name;

 		 			echo $term->image;?></h2>

 		 			</a>
 		 		</div>
 		 		<? endforeach; ?>
 		 	</div>

<!-- fan favourites -->



		<h1 class="textCenter black categories marginTop marginBottom "> Fan Favourites  </h1>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
  <?php
$query_favourites = new WP_Query(array(
                "post_type" => "favourites",
                ));
            $i = 0;
            ?>
  <?php while ($query_favourites->have_posts()) : $query_favourites->the_post(); $i++; 
   ?>
   <?php if($i == 1) : ?>
    <div class="carousel-item active" >
    <?php else : ?>
    <div class="carousel-item"> <?php endif ?>
    
	    	<div class="favouritesImage" style="background: url('<?php echo get_the_post_thumbnail_url()?>') no-repeat; background-size: contain;">
	      	</div>
	      <div class="favouritesText">
	      	<h1>"<?php echo get_the_content()?>"</h1>
	      	<p class="alighRight">-<?php echo get_field("fan_name")?></p>
	      </div>
	
    </div>
   <?php endwhile; 
   wp_reset_postdata();?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- buttons -->
<div class="homeButtons marginTop">
<?php
	$frontpage_id = get_post_meta($front_id, '_meta_key', true);
	for ($i = 1; $i < 3; $i++ ) {
	$button_title = get_field('button_'.$i.'_title', $frontpage_id);
  		if ($button_title != "") {
  	print_r ('<div class="homeButton"> <a href="'.get_field('button_'.$i.'_link',$frontpage_id).'">'.$button_title.'</a></div>');	
  		}
  	}
 ?>
</div>
<!-- intagram -->
		<?php 
		$token = get_field("token");
		$username = get_field("username");

		$instagram_array = array(
							'token' => $token,
							'username' => $username,
							);
										
		wp_localize_script( 'instagram', 'user', $instagram_array );

		?>
<a href="https://www.instagram.com/<?php echo get_field("username")?>/" target="_blank">
<h6 class="textCenter black categories marginTop instagram "> Connect with us on Instagram   </h6></a>
<section class="InstagramBody" >

<div class="Instagramcarousel" id="instagram-feeds"></div>

<p class="text-link"></p>

</section>






