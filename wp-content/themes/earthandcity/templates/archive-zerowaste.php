<h1>im in archive-zerowaste.php</h1>
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/20/2017
 * Time: 11:18 AM
 */
?>

<?php


$tax = get_object_taxonomies (array ("post_type" => "zero-waste"));
$terms = get_terms($tax);
print_r ($terms);

?>

<!--<div class="flex textCenter productsType caps teal-navi">-->
<!--    --><?//foreach ($terms as $term) : ?>
<!---->
<!--        <!-- --><?php
//        echo get_term_link($term); ?><!-- -->-->
<!--        <a href="--><?php //echo get_term_link($term); ?><!--">--><?php //echo $term->name ?><!--</a>-->
<!--    --><?// endforeach; ?>
<!--</div>-->
