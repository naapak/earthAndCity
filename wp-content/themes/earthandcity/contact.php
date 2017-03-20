<h1 class="redcolor">I am contact.php</h1>
<?php

/*


Template Name: Farmers Market

*/

?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>



