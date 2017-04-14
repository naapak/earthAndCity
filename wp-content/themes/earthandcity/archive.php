<?php get_template_part("templates/content","header"); ?>

<div class="wrap marginBottom">
	
	<div class="panel-group catering-accordion" id="accordion" role="tablist" aria-multiselectable="true">
		<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
  	<div class="panel panel-default ">
    <div class="panel-heading" role="tab" id="heading-<?php the_ID(); ?>">
      <!-- <h4 class="panel-title"> -->
      
        <a class="accordion-box" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse-<?php the_ID(); ?>">
        <?php get_template_part( 'templates/content', get_post_type()); ?>
        </a>
      <!-- </h4> -->
    </div>

    <div id="collapse-<?php the_ID(); ?>" class="panel-collapse collapse<?php echo ($the_query->current_post == 0 ? ' in' : ''); ?>" role="tabpanel" aria-labelledby="heading-<?php the_ID(); ?>">
      <div class="panel-body catering-content faq-content">
        <?php echo get_the_content() ?>
      </div>
    </div>
  </div>


<?php endwhile; else: ?>


<?php endif; ?>
<?php wp_reset_postdata(); ?> 
</div><!--end of the accordion wrap-->


</div><!--wrapper-->

