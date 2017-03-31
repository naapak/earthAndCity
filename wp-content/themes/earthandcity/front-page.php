<?php  ?>


<!-- email -->

		



<div  id="mc_embed_signup" class="paddingTopBottom emailBackground">

	<h5 class="textCenter" >Sign-up for exclusive offers! </h5>

				<form action="//earthandcity.us9.list-manage.com/subscribe/post?u=0d5ee7dafe74014c19b7248e3&amp;id=9df49b8429" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll" class="col-sm-12 textCenter ">
						<div class="mc-field-group">
		<input type="email" value="" name="EMAIL" id="mce-EMAIL" class="emailAddressInput" placeholder="Enter your email address">
						
						
						<input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe" class="btn emailJoinbtn">
						</div>
					<div class="mc-field-group input-group"></div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0d5ee7dafe74014c19b7248e3_9df49b8429" tabindex="-1" value=""></div>
				    
				    </div>
				</form>
		
         <!-- search bar -->
</div>


<!-- impact -->

       <h1 class="textCenter black categories marginTop "> Let's make an impact, together  </h1>
       <?php   $terms = get_terms(array("impact"));

        ?>
 			
 		 	<div class="flex textCenter marginTop">
 		 		<?foreach ($terms as $term) : ?>

 		 		
 		 		<div class="shopCategories">
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
  <?php while (have_posts()) : the_post() ;     ?>
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="..." alt="Second slide">
    </div>
   <?php endwhile; ?> 
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
<div class="homeButtons">
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

<h6 class="textCenter black categories "> Connect with us on instagram   </h6>





