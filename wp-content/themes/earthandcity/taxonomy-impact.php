<?php
/**

 */
?>

<?php
$args =
$tax = get_object_taxonomies (array ('ourimpact', "impact"));
$terms = get_terms($tax, array('hide_empty' => false,
                               'order' => 'des'  ));
?>
<!--
=================
===   TERMS   ===
=================
-->
<?php $path = get_template_directory_uri().'/assets/images/IconsPNG/right-thin-chevron.png';  
     ?>
     <!-- <img src="<?php echo $path; ?>"> -->

<div class="flex-impact-content color-black  marginTop font-xl impactPaddingBottom ">
    <?php $i=0; foreach ($terms as $term) : $i++ ?>
        <?php if(get_query_var('impact') == $term->slug){ $classOfbutton = "term".$i;
            $style= ' background: url("'.$path.'") center bottom no-repeat; background-size: contain ;height:20px; width:40px; z-index=2' ;

        } else { $classOfbutton =""; $style= "";} ?>

        <div class=" col-sm-4 textCenter   ">
        <a class=" <?php echo $classOfbutton?>" href="<?php echo get_term_link($term); ?>"><?php echo $term->name ?></a>
        <div class=" marginTop buttonImage"><div   style='<?php echo $style; ?>' > </div> </div>
        </div>
        
    <?php endforeach; ?>
</div>


<!--
=====================
===   Accordion   ===
=====================
--> 

<div class="wrap marginBottom">
    
    <div class="panel-group catering-accordion" id="accordion" role="tablist" aria-multiselectable="true">
        <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
    <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading-<?php the_ID(); ?>">
      <!-- <h4 class="panel-title"> -->
      
        <a class="accordion-box" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse-<?php the_ID(); ?>">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- <header class="entry-header"> -->
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <div id="post" class="catering-image" style="background: url('<?php echo $thumb['0'];?>') center bottom no-repeat; background-size: cover">
                <?php echo "<h3 class='menu-title white-text'>".get_the_title()."</h3>" ?>
                <div class="arrow-down"><img class="down-chevron" src="<?php echo get_bloginfo('stylesheet_directory') ?>/assets/images/Icons/down-chevron.png"></div>
            </div>      
        <!-- </header> -->
    </article>
        </a>
      <!-- </h4> -->
    </div>

    <div id="collapse-<?php the_ID(); ?>" class="panel-collapse collapse<?php echo ($the_query->current_post == 0 ? ' in' : ''); ?>" role="tabpanel" aria-labelledby="heading-<?php the_ID(); ?>">
        <div class="panel-body catering-content faq-content ">
            <?php if(get_query_var('impact') == 'zero-waste'){ ?>
                <div class="side-image">
                    <img src="<?php echo (get_field('image_1')['url']);?>">
                </div>
            <?php     } ?>
            <div class="padding-content-med">
                <h3><?php echo get_field("title");?></h3>
                <p><?php echo wpautop(get_field("body"),true);?></p>

                <?php if(get_query_var('impact') == 'zero-waste'){ ?>
                    <h3><?php echo get_field("title_2");?></h3>
                    <p><?php echo wpautop(get_field("body_2"),true);?></p>
                <?php     } ?>
            </div>
        </div>
    </div>

<?php endwhile; else: ?>


<?php endif; ?>


