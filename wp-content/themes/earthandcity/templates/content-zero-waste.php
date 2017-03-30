<h1> I am in custom-zerowaste.php</h1>

<?php if (is_tax('impact') ) { ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <div id="post" class="catering-image" style="background-image: url('<?php echo $thumb['0'];?>')">
                <?php echo "<h3 class='catering-title white-text'>".get_the_title()."</h3>" ?>
            </div>
        </header>
    </article>

<?php }?>