<h1>This is header.php</h1>
<?php
/*
Header
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

      <header id="masthead" class="site-header" role="banner">
  <div class="container">
    
  
    <div class="logoIcon">
      <img src="<?php echo get_bloginfo("stylesheet_directory")?>../assets/images/logo/logocircle.svg" alt="Earth + City Logo">
    </div>


    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>

      <?php
        $query_adventure = new WP_Query(array(
          "posts_per_page" => 4,
          "post_type" => "Adventures",
          "order" => "ASC"
          ));
      ?>
            
            <h2 class="textCenter black categories caps"> Latest Adventures </h2>
            <?php $i=0;  ?>
            <div class="flex adventure-container">
 <?php while ( $query_adventure->have_posts() ) : $query_adventure->the_post(); ?>
                 <?php $i++;  ?>
                 <?php if ( has_post_thumbnail() ) : $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); endif; ?>
             <?php if($i == 1) : ?>
                 <div class="firstDiv" style="background: url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
             <?php endif ?>
              <?php if($i == 2) : ?>
             <div class="divSecond">
                     <div class="secondDivtop" style="background: url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
             <?php endif ?>
             <?php  if($i == 3) : ?>
                 <div class="thirdDiv">
                 <div class="thirdDivtop" style="background: url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
             <?php endif ?>
             <?php  if($i == 4) : ?>
                 <div class="fourthDiv" style="background: url('<?php echo $thumb['0'];?>') center !important; background-size: cover !important; ">
             <?php endif ?>
                 
                 <article class="adventure-header" id="post-<?php the_ID(); ?>" <?php post_class(); ?>  >
                        <div class="adventure-text">
                            <h2 class="caps white"><?php echo the_title()?></h2>
                            
                            <a href="<?php echo get_permalink(); ?>">
                            <button class=" caps">Read More</button>
                            </a>
                        </div>
                        
                        
                </article><!-- #post-## -->
                <?php if($i == 1) : ?>
                 </div>
                 <?php endif ?>
                 <?php if($i == 2) : ?>
                 </div>
                 <?php endif ?>
                 <?php if($i == 3) : ?>
                 </div>
                 <?php endif ?>
                <?php if($i == 4) : ?>
                </div>
                 </div>
                 </div>
             <?php endif ?>
                <?php endwhile; ?>
            </div>
    </nav>
  </div>
</header>
