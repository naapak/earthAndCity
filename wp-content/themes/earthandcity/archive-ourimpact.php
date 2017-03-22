<h1>i am in archive ourimpact</h1>

<?php
$tax = get_object_taxonomies (array ("post_type" => "zero-waste"));
$terms = get_terms($tax);
?>


<div class="">
    <?php foreach ($terms as $term) : ?>

        <!-- <?php
        echo ($term->name);
        echo get_term_link($term); ?> -->
        <a href="<?php echo get_term_link($term); ?>"><?php echo $term->name ?></a>
    <?php endforeach; ?>
</div>



<div class="">
    <?php
    echo "ter, :".$_GET["term"];
    $post_query = new WP_Query(array("post_type"=> "ourimpact", "tax_query" => array(
            "field" => "slug",
            "taxonomy" => "impact",
            "term" => $_GET['term'])));
    while ( $post_query->have_posts() ) : $post_query->the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="ProductItem "  <?php post_class(); ?>>
            <header class="">

                <?php if ( has_post_thumbnail() ) : ?>
                <img class=""
                     src=<?php echo the_post_thumbnail("small");?>

                     <?php endif; ?>
    <!----- Accordion ------>

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a data-target="#panel-1" data-toggle="collapse" data-parent="#accordion" href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                        </div>
                        <div class="panel-collapse collapse" id="panel-1">
                            <div class="panel-body">
                                <p>Accordion Works!</p>
                            </div>
                        </div>
                        <div class="panel-collapse collapse" id="panel-2">
                            <div class="panel-body">
                                <p>Accordion Works!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </header><!-- .entry-header -->

        </article><!-- #post-## -->

    <?php endwhile; ?>

</div>

