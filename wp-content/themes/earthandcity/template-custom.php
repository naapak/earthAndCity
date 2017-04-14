<?php
/**
 * Template Name: About Us

 */
?>

<?php while (have_posts()) : the_post(); 
get_the_post_thumbnail_url("assets/images/mamaearth10.jpg");
get_the_post_thumbnail_caption("Lisa Sweetman (right) and Cassandra Rizzotto (left) Co-founders of Earth & City");
?>
  
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
